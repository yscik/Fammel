<?php

class HamlRule
{
  const CONTENT = 'content';
  const INLINE = 'inline';
  const CONTENTMIX = 'contentmix';
  const EXEC_ECHO = 'echo';
  const EXEC = 'exec';
  const ROOT = 'root';
  const COMMENT = 'comment';
  const DOCTYPE = 'doctype';
  const SELFCLOSE = 'selfclose';
  
  public $indent;
  public $tag;
  public $attr;
  public $action;
  public $content;
  public $selfclose;
  public $indent_in_render, $indent_out_render;
  
  public $index;
  public $parent;
  public $children;
  public $next;
  public $prev;
  
  public $next_sibling;
  public $prev_sibling;  
  
  public function __construct($indent, $tag, $attr, $action, $content)
  {
    $this->indent = $indent;
    $this->indent_out_render = true;
    $this->indent_in_render = true;
    $this->tag = $tag;
    $this->attr = $attr;
    $this->action = $action;
    $this->content = trim($content);

    $this->parent = $this->next = $this->prev = null; 
    $this->index = 0;
    $this->children = array();
    
    if(count($this->attr['class']))
    {
      $classes = explode(' ', $this->attr['class']);
      $classes = array_unique($classes);
      sort($classes);
      $this->attr['class'] = implode(' ', $classes);
    }
  }
  
  public function render()
  {
    global $indent_size;
    
    $indent_in = $indent_out = $rendered = '';
    
    if($this->action == HamlRule::DOCTYPE)
    {
      $this->content = trim(strtolower($this->content));
      
      if(preg_match('/^xml/', $this->content))
      {
        $charset = trim(str_replace('xml', '', $this->content));
        
        if(!$charset)
        {
          $charset = 'utf-8';
        }
        
        $rendered .= "<?xml version='1.0' encoding='$charset' ?>\n";
      }
      else
      {
        switch($this->content)
        {
          default:
          case '5':
            $rendered .= '<!DOCTYPE html>'; break;
          case '1.0 transitional':
            $rendered .= '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">'; break;
          case 'strict':
            $rendered .= '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">'; break;
          case 'frameset':
            $rendered .= '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">'; break;
          case '1.1':
            $rendered .= '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">'; break;
          case 'basic':
            $rendered .= '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML Basic 1.1//EN" "http://www.w3.org/TR/xhtml-basic/xhtml-basic11.dtd">'; break; 
          case 'mobile':
            $rendered .= '<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN" "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">'; break;
          case '4.01 transitional':
            $rendered .= '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">'; break;
          case '4.01 strict':
            $rendered .= '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">'; break;
          case '4.01 frameset':
            $rendered .= '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">'; break;
        }
        
        $rendered .= "\n";
      }
      
      return $rendered;
    }
        
    if($this->indent_out_render)
    {
      $indent_out = str_repeat(" ", $this->indent);
    }
    
    if($this->indent_in_render)
    {
      $indent_in = str_repeat(" ", $this->indent + $indent_size);
    }
      
    if($this->tag)
    {
      $rendered .= "$indent_out<$this->tag";

      if(count($this->attr))
      {
        asort($this->attr);
        foreach($this->attr as $name => $value)
        {
          $rendered .= ($name == "*") ?  " $value" : " $name=\"$value\"";
        }
      }
      
      if($this->selfclose) $rendered .= " /";
      $rendered .= ">";
      if(!$this->content) $rendered .= "\n";
    }
    
    if($this->tag && $this->content && $this->indent_in_render)
    {

    }
    
    switch($this->action)
    {
      case HamlRule::COMMENT:

        $rendered .= "$indent_in<!-- $this->content";
        
        if($this->next->indent <= $this->indent)
        {
          $rendered .= " -->";
        }
        else
        {
          $rendered .= "\n";
        }
        
        break;
        
      case HamlRule::CONTENT:   if($this->content) $rendered .= $this->content; break;
      case HamlRule::EXEC_ECHO: $rendered .= "<?php echo {$this->content} ?>"; break;
      case HamlRule::EXEC:    
        
        if(!($this->prev_sibling->action == HamlRule::EXEC && $this->prev_sibling->next->indent > $this->prev_sibling->indent))
        {
          $rendered .= "$indent_in<?php ";
        }
    
        $rendered .= "$this->content";
        
        if($this->next->indent > $this->indent)
        {
          $rendered .= " {";
        }
        
        $rendered .= " ?>\n";
        
        break;
    }
    
    if(!$this->content && !$this->tag)
    {
      $rendered .= "\n";
    }
    
    foreach($this->children as $child)
    {
      $rendered .= $child->render();
    }
    
    if($this->next->indent > $this->indent)
    {
      switch($this->action)
      {
        case HamlRule::EXEC:
          $rendered .= "$indent_in<?php } ";
          
          if(!($this->next_sibling->action == HamlRule::EXEC && $this->next_sibling->next->indent > $this->next_sibling->indent))
          {
            $rendered .= " ?>\n";
          }
          
          break;
        
        case HamlRule::COMMENT:
          $rendered .= "$indent_in-->\n";
          
          break;
      }
    }
    
    if($this->tag && !$this->selfclose)
    {
      if(!$this->content) $rendered .= "$indent_out";
      $rendered .= "</$this->tag>\n";
    }
    
    return $rendered;
  }
}

class Expectations
{
  public $indent_size;
  protected $_got_indent_size;
  protected $_last_indent;
  
  function __construct()
  {
    global $indent_size;
    
    $this->_got_indent_size = false;
    $this->indent_size = $indent_size = 2;
    $this->_last_indent = 0;
  }
  
  function check($rule)
  {
    global $LINE;
    
    if($rule->indent && !$this->_got_indent_size)
    {
      global $indent_size;
      $indent_size = $this->indent_size = $rule->indent;
      $this->_got_indent_size = true;
    }
    
    
    //
    // Is the indent 0, a multiple of the indent size and not more than one 
    // level deeper than the previous rule?
    //
    
    if($this->_got_indent_size)
    {
      if($rule->indent % $this->indent_size != 0)
      {
        throw new FammelIndentExeption("Parse error: indent ($rule->indent) is not a multiple of the current indent size ($this->indent_size) on or near line " . ($LINE -1), $LINE-1);
      }
      
      if($rule->indent > $this->_last_indent + $this->indent_size)
      {
        throw new FammelIndentExeption("Parse error: indent is too large on or near line " . ($LINE -1), $LINE-1);
      }
        
      $this->_last_indent = $rule->indent; 
    }
  }
}

class HamlParser extends lime_parser
{
  protected $_ast;
  protected $_last_rule;
  
  protected $_cur_attr;
  protected $_cur_tag;
  
  protected $_expect;
  protected $_content;
  
  protected $_ws_in, $_ws_out;
  
  function __construct()
  {
    $this->_cur_attr = $this->_last_parent = array();
    $this->_cur_tag = '';
    $this->_content = array();
    $this->_ws_in = false;
    $this->_ws_out = false;
    
    $this->_ast[0] = $this->_last_rule = new HamlRule(0, '', array(), HamlRule::ROOT, '');
    array_unshift($this->_last_parent, $this->_last_rule);
    
    $this->_expect = new Expectations();
  }

  function add_rule($indent, $tag, $attr, $action, $content)
  {
    if($action != HamlRule::COMMENT && $action != HamlRule::DOCTYPE && $tag == '' && ($content == '' || $action != HamlRule::SELFCLOSE))
    { 
   //   return;
    }
    
    $new_rule = new HamlRule($indent, $tag, $attr, $action, $content);
    $new_rule->index = count($this->_ast);
    
    if($action == HamlRule::SELFCLOSE)  $new_rule->selfclose = true;
    
    if($this->_ws_in)  $new_rule->indent_in_render = false;
    if($this->_ws_out)  $new_rule->indent_out_render = false;
   
    $this->_expect->check($new_rule);
    
    $this->_ast[] = $new_rule;
    
    $this->_last_rule->next = $new_rule;
    $new_rule->prev = $this->_last_rule;
    
    if($new_rule->indent > $this->_last_rule->indent)
    {
      array_unshift($this->_last_parent, $this->_last_rule);
    }
    else if($new_rule->indent < $this->_last_rule->indent)
    {
      $last_indent = $this->_last_rule->indent;
      
      for(;$last_indent > $indent; $last_indent -= 2)
      {
        $popped = array_shift($this->_last_parent);
      }
      
      $new_rule->prev_sibling = $popped;
      $popped->next_sibling = $new_rule;
    }
    else
    {
      $new_rule->next_sibling = $new_rule->next;
      $new_rule->prev_sibling = $new_rule->prev;
    }
    
    $this->_last_parent[0]->children[] = $new_rule;
    $new_rule->parent = $this->_last_parent[0];
    
    $this->_last_rule = $new_rule;
    $this->_cur_tag = '';
    $this->_cur_attr = array();
    $this->_content = array();  
    $this->_ws_in = false;
    $this->_ws_out = false;
  }
  
  function process_tag($tag, $id)
  {
    $this->_cur_tag = $tag;
    
    if($id)
    {
      $this->_cur_attr['id'] = $id;
    }
  } 

  function process_attr($name, $value)
  {
    $this->_cur_attr[$name] = $this->inline_code($value);
  }
  
  function process_attr_html($value)
  {
    $this->_cur_attr["*"] = trim($this->inline_code($value));
  }
  
  function process_content($value)
  {
    $this->_content = $value;
  }

  function process_eat()
  {
    $this->_ws_in = true;
  }
    
  function process_content_rule($indent, $content)
  {
    $this->add_rule($indent, $this->_cur_tag, $this->_cur_attr, HamlRule::CONTENT, $this->inline_code($content));
  }
  
  function process_selfclosing_rule($indent)
  {
    $this->add_rule($indent, $this->_cur_tag, $this->_cur_attr, HamlRule::SELFCLOSE, "");
  }
  
  function process_comment_rule($indent, $content)
  {
    $this->add_rule($indent, '', array(), HamlRule::COMMENT, $this->inline_code($content));
  }
  
  function process_echo_rule($indent, $code, $escaping)
  {    
    switch($escaping)
    {
      case 'PLAIN_ECHO':
      case 'ESCAPED_ECHO':
        $code = "htmlspecialchars($code, ENT_COMPAT);";
        break;
    }
    
    $this->add_rule($indent, $this->_cur_tag, $this->_cur_attr, HamlRule::EXEC_ECHO, $code);
  }
  
  function process_exec_rule($indent, $code)
  {
    $this->add_rule($indent, $this->_cur_tag, $this->_cur_attr, HamlRule::EXEC, $code);
  }
  
  function process_doctype($doctype)
  {
    $this->add_rule(0, '', array(), HamlRule::DOCTYPE, $doctype);
  }
  
  function process_class($class)
  {
    if(isset($this->_cur_attr['class']))
    {
      $this->_cur_attr['class'] .= " $class";
    }
    else
    {
      $this->_cur_attr['class'] = "$class";
    }
  }
  
  function inline_code($c)
  {
    return preg_replace("/#{([^}]+)}/u", '<?php echo htmlspecialchars(\1, ENT_COMPAT); ?>', $c);
  }
  
  function print_ast()
  {
    foreach($this->_ast as $rule)
    {
      printf("%3.3d\tp=%3.3d,c=%3.3d,n=%3.3d,v=%3.3d\t", $rule->index, $rule->parent->index, $rule->child->index, $rule->next->index, $rule->prev->index); 
      for($i = 0; $i < $rule->indent; $i++) echo " ";
      
      echo "$rule->tag(";
      
      foreach($rule->attr as $attr => $value)
      {
        echo "$attr: $value ";
      }
      
      echo ") $rule->action: $rule->content\n";
    }
  }
  
  function render()
  {
   // $this->print_ast();
    
    $this->_rendered = $this->_ast[0]->render();
    
    return $this->_rendered;
  }
  
}

?>

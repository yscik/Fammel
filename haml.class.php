<?php

class Haml extends HamlParser {
var $qi = 0;
var $i = array (
  0 => 
  array (
    'rule' => 's 1',
    'haml_file' => 's 2',
    'INDENT' => 's 4',
    '\'start\'' => 'a \'start\'',
  ),
  1 => 
  array (
    'INDENT' => 'r 0',
    '#' => 'r 0',
  ),
  2 => 
  array (
    'rule' => 's 3',
    'INDENT' => 's 4',
    '#' => 'r 35',
  ),
  3 => 
  array (
    'INDENT' => 'r 1',
    '#' => 'r 1',
  ),
  4 => 
  array (
    'TAG' => 's 5',
    'ID' => 's 12',
    'class_list' => 's 14',
    'CLASS' => 's 9',
    'tag_decl' => 's 16',
    'tag_with_attributes' => 's 26',
    'LINE_CONTENT' => 's 27',
    'ESCAPED_ECHO' => 's 28',
    'UNESCAPED_ECHO' => 's 29',
    'PLAIN_ECHO' => 's 30',
    'tag' => 's 31',
    'echo' => 's 36',
    'EXEC' => 's 38',
    'HAML_COMMENT' => 's 40',
    'COMMENT' => 's 42',
    'DOCTYPE' => 's 44',
    'ESCAPE' => 's 46',
    'content' => 's 48',
    'INDENT' => 'r 21',
    '#' => 'r 21',
  ),
  5 => 
  array (
    'ID' => 's 6',
    'class_list' => 's 10',
    'CLASS' => 's 9',
    'ATTR_START' => 'r 2',
    'HTML_ATTR' => 'r 2',
    'ESCAPED_ECHO' => 'r 2',
    'UNESCAPED_ECHO' => 'r 2',
    'PLAIN_ECHO' => 'r 2',
    'TAG_CLOSE' => 'r 2',
    'LINE_CONTENT' => 'r 2',
    'INDENT' => 'r 2',
    '#' => 'r 2',
  ),
  6 => 
  array (
    'class_list' => 's 7',
    'CLASS' => 's 9',
    'ATTR_START' => 'r 3',
    'HTML_ATTR' => 'r 3',
    'ESCAPED_ECHO' => 'r 3',
    'UNESCAPED_ECHO' => 'r 3',
    'PLAIN_ECHO' => 'r 3',
    'TAG_CLOSE' => 'r 3',
    'LINE_CONTENT' => 'r 3',
    'INDENT' => 'r 3',
    '#' => 'r 3',
  ),
  7 => 
  array (
    'CLASS' => 's 8',
    'ATTR_START' => 'r 4',
    'HTML_ATTR' => 'r 4',
    'ESCAPED_ECHO' => 'r 4',
    'UNESCAPED_ECHO' => 'r 4',
    'PLAIN_ECHO' => 'r 4',
    'TAG_CLOSE' => 'r 4',
    'LINE_CONTENT' => 'r 4',
    'INDENT' => 'r 4',
    '#' => 'r 4',
  ),
  8 => 
  array (
    'CLASS' => 'r 12',
    'ATTR_START' => 'r 12',
    'HTML_ATTR' => 'r 12',
    'ID' => 'r 12',
    'ESCAPED_ECHO' => 'r 12',
    'UNESCAPED_ECHO' => 'r 12',
    'PLAIN_ECHO' => 'r 12',
    'TAG_CLOSE' => 'r 12',
    'LINE_CONTENT' => 'r 12',
    'INDENT' => 'r 12',
    '#' => 'r 12',
  ),
  9 => 
  array (
    'CLASS' => 'r 11',
    'ID' => 'r 11',
    'ATTR_START' => 'r 11',
    'HTML_ATTR' => 'r 11',
    'ESCAPED_ECHO' => 'r 11',
    'UNESCAPED_ECHO' => 'r 11',
    'PLAIN_ECHO' => 'r 11',
    'TAG_CLOSE' => 'r 11',
    'LINE_CONTENT' => 'r 11',
    'INDENT' => 'r 11',
    '#' => 'r 11',
  ),
  10 => 
  array (
    'ID' => 's 11',
    'CLASS' => 's 8',
    'ATTR_START' => 'r 5',
    'HTML_ATTR' => 'r 5',
    'ESCAPED_ECHO' => 'r 5',
    'UNESCAPED_ECHO' => 'r 5',
    'PLAIN_ECHO' => 'r 5',
    'TAG_CLOSE' => 'r 5',
    'LINE_CONTENT' => 'r 5',
    'INDENT' => 'r 5',
    '#' => 'r 5',
  ),
  11 => 
  array (
    'ATTR_START' => 'r 6',
    'HTML_ATTR' => 'r 6',
    'ESCAPED_ECHO' => 'r 6',
    'UNESCAPED_ECHO' => 'r 6',
    'PLAIN_ECHO' => 'r 6',
    'TAG_CLOSE' => 'r 6',
    'LINE_CONTENT' => 'r 6',
    'INDENT' => 'r 6',
    '#' => 'r 6',
  ),
  12 => 
  array (
    'class_list' => 's 13',
    'CLASS' => 's 9',
    'ATTR_START' => 'r 8',
    'HTML_ATTR' => 'r 8',
    'ESCAPED_ECHO' => 'r 8',
    'UNESCAPED_ECHO' => 'r 8',
    'PLAIN_ECHO' => 'r 8',
    'TAG_CLOSE' => 'r 8',
    'LINE_CONTENT' => 'r 8',
    'INDENT' => 'r 8',
    '#' => 'r 8',
  ),
  13 => 
  array (
    'CLASS' => 's 8',
    'ATTR_START' => 'r 7',
    'HTML_ATTR' => 'r 7',
    'ESCAPED_ECHO' => 'r 7',
    'UNESCAPED_ECHO' => 'r 7',
    'PLAIN_ECHO' => 'r 7',
    'TAG_CLOSE' => 'r 7',
    'LINE_CONTENT' => 'r 7',
    'INDENT' => 'r 7',
    '#' => 'r 7',
  ),
  14 => 
  array (
    'ID' => 's 15',
    'CLASS' => 's 8',
    'ATTR_START' => 'r 10',
    'HTML_ATTR' => 'r 10',
    'ESCAPED_ECHO' => 'r 10',
    'UNESCAPED_ECHO' => 'r 10',
    'PLAIN_ECHO' => 'r 10',
    'TAG_CLOSE' => 'r 10',
    'LINE_CONTENT' => 'r 10',
    'INDENT' => 'r 10',
    '#' => 'r 10',
  ),
  15 => 
  array (
    'ATTR_START' => 'r 9',
    'HTML_ATTR' => 'r 9',
    'ESCAPED_ECHO' => 'r 9',
    'UNESCAPED_ECHO' => 'r 9',
    'PLAIN_ECHO' => 'r 9',
    'TAG_CLOSE' => 'r 9',
    'LINE_CONTENT' => 'r 9',
    'INDENT' => 'r 9',
    '#' => 'r 9',
  ),
  16 => 
  array (
    'tag_attributes' => 's 17',
    'ATTR_START' => 's 18',
    'HTML_ATTR' => 's 25',
    'ESCAPED_ECHO' => 'r 14',
    'UNESCAPED_ECHO' => 'r 14',
    'PLAIN_ECHO' => 'r 14',
    'TAG_CLOSE' => 'r 14',
    'LINE_CONTENT' => 'r 14',
    'INDENT' => 'r 14',
    '#' => 'r 14',
  ),
  17 => 
  array (
    'ESCAPED_ECHO' => 'r 13',
    'UNESCAPED_ECHO' => 'r 13',
    'PLAIN_ECHO' => 'r 13',
    'TAG_CLOSE' => 'r 13',
    'LINE_CONTENT' => 'r 13',
    'INDENT' => 'r 13',
    '#' => 'r 13',
  ),
  18 => 
  array (
    'attribute_list' => 's 19',
    'ATTR_NAME' => 's 22',
  ),
  19 => 
  array (
    'ATTR_END' => 's 20',
    'ATTR_SEP' => 's 21',
  ),
  20 => 
  array (
    'ESCAPED_ECHO' => 'r 16',
    'UNESCAPED_ECHO' => 'r 16',
    'PLAIN_ECHO' => 'r 16',
    'TAG_CLOSE' => 'r 16',
    'LINE_CONTENT' => 'r 16',
    'INDENT' => 'r 16',
    '#' => 'r 16',
  ),
  21 => 
  array (
    'ATTR_NAME' => 's 22',
    'attribute_list' => 's 24',
  ),
  22 => 
  array (
    'ATTR_VALUE' => 's 23',
  ),
  23 => 
  array (
    'ATTR_SEP' => 'r 18',
    'ATTR_END' => 'r 18',
  ),
  24 => 
  array (
    'ATTR_SEP' => 's 21',
    'ATTR_END' => 'r 19',
  ),
  25 => 
  array (
    'ESCAPED_ECHO' => 'r 17',
    'UNESCAPED_ECHO' => 'r 17',
    'PLAIN_ECHO' => 'r 17',
    'TAG_CLOSE' => 'r 17',
    'LINE_CONTENT' => 'r 17',
    'INDENT' => 'r 17',
    '#' => 'r 17',
  ),
  26 => 
  array (
    'ESCAPED_ECHO' => 'r 15',
    'UNESCAPED_ECHO' => 'r 15',
    'PLAIN_ECHO' => 'r 15',
    'TAG_CLOSE' => 'r 15',
    'LINE_CONTENT' => 'r 15',
    'INDENT' => 'r 15',
    '#' => 'r 15',
  ),
  27 => 
  array (
    'INDENT' => 'r 20',
    '#' => 'r 20',
  ),
  28 => 
  array (
    'LINE_CONTENT' => 'r 22',
    'INDENT' => 'r 22',
    '#' => 'r 22',
  ),
  29 => 
  array (
    'LINE_CONTENT' => 'r 23',
    'INDENT' => 'r 23',
    '#' => 'r 23',
  ),
  30 => 
  array (
    'LINE_CONTENT' => 'r 24',
    'INDENT' => 'r 24',
    '#' => 'r 24',
  ),
  31 => 
  array (
    'LINE_CONTENT' => 's 27',
    'ESCAPED_ECHO' => 's 28',
    'UNESCAPED_ECHO' => 's 29',
    'PLAIN_ECHO' => 's 30',
    'content' => 's 32',
    'TAG_CLOSE' => 's 33',
    'echo' => 's 34',
    'INDENT' => 'r 21',
    '#' => 'r 21',
  ),
  32 => 
  array (
    'INDENT' => 'r 25',
    '#' => 'r 25',
  ),
  33 => 
  array (
    'INDENT' => 'r 26',
    '#' => 'r 26',
  ),
  34 => 
  array (
    'LINE_CONTENT' => 's 27',
    'content' => 's 35',
    'INDENT' => 'r 21',
    '#' => 'r 21',
  ),
  35 => 
  array (
    'INDENT' => 'r 27',
    '#' => 'r 27',
  ),
  36 => 
  array (
    'LINE_CONTENT' => 's 27',
    'content' => 's 37',
    'INDENT' => 'r 21',
    '#' => 'r 21',
  ),
  37 => 
  array (
    'INDENT' => 'r 28',
    '#' => 'r 28',
  ),
  38 => 
  array (
    'LINE_CONTENT' => 's 27',
    'content' => 's 39',
    'INDENT' => 'r 21',
    '#' => 'r 21',
  ),
  39 => 
  array (
    'INDENT' => 'r 29',
    '#' => 'r 29',
  ),
  40 => 
  array (
    'LINE_CONTENT' => 's 27',
    'content' => 's 41',
    'INDENT' => 'r 21',
    '#' => 'r 21',
  ),
  41 => 
  array (
    'INDENT' => 'r 30',
    '#' => 'r 30',
  ),
  42 => 
  array (
    'LINE_CONTENT' => 's 27',
    'content' => 's 43',
    'INDENT' => 'r 21',
    '#' => 'r 21',
  ),
  43 => 
  array (
    'INDENT' => 'r 31',
    '#' => 'r 31',
  ),
  44 => 
  array (
    'LINE_CONTENT' => 's 27',
    'content' => 's 45',
    'INDENT' => 'r 21',
    '#' => 'r 21',
  ),
  45 => 
  array (
    'INDENT' => 'r 32',
    '#' => 'r 32',
  ),
  46 => 
  array (
    'LINE_CONTENT' => 's 27',
    'content' => 's 47',
    'INDENT' => 'r 21',
    '#' => 'r 21',
  ),
  47 => 
  array (
    'INDENT' => 'r 33',
    '#' => 'r 33',
  ),
  48 => 
  array (
    'INDENT' => 'r 34',
    '#' => 'r 34',
  ),
);
function reduce_0_haml_file_1($tokens, &$result) {
#
# (0) haml_file :=  rule
#
$result = reset($tokens);

}

function reduce_1_haml_file_2($tokens, &$result) {
#
# (1) haml_file :=  haml_file  rule
#
$result = reset($tokens);

}

function reduce_2_tag_decl_1($tokens, &$result) {
#
# (2) tag_decl :=  TAG
#
$result = reset($tokens);
$t =& $tokens[0];
 $this->process_tag($t, ''); 
}

function reduce_3_tag_decl_2($tokens, &$result) {
#
# (3) tag_decl :=  TAG  ID
#
$result = reset($tokens);
$t =& $tokens[0];
$i =& $tokens[1];
 $this->process_tag($t, $i); 
}

function reduce_4_tag_decl_3($tokens, &$result) {
#
# (4) tag_decl :=  TAG  ID  class_list
#
$result = reset($tokens);
$t =& $tokens[0];
$i =& $tokens[1];
 $this->process_tag($t, $i); 
}

function reduce_5_tag_decl_4($tokens, &$result) {
#
# (5) tag_decl :=  TAG  class_list
#
$result = reset($tokens);
$t =& $tokens[0];
 $this->process_tag($t, ''); 
}

function reduce_6_tag_decl_5($tokens, &$result) {
#
# (6) tag_decl :=  TAG  class_list  ID
#
$result = reset($tokens);
$t =& $tokens[0];
$i =& $tokens[2];
 $this->process_tag($t, $i); 
}

function reduce_7_tag_decl_6($tokens, &$result) {
#
# (7) tag_decl :=  ID  class_list
#
$result = reset($tokens);
$i =& $tokens[0];
 $this->process_tag('div', $i); 
}

function reduce_8_tag_decl_7($tokens, &$result) {
#
# (8) tag_decl :=  ID
#
$result = reset($tokens);
$i =& $tokens[0];
 $this->process_tag('div', $i); 
}

function reduce_9_tag_decl_8($tokens, &$result) {
#
# (9) tag_decl :=  class_list  ID
#
$result = reset($tokens);
$i =& $tokens[1];
 $this->process_tag('div', $i); 
}

function reduce_10_tag_decl_9($tokens, &$result) {
#
# (10) tag_decl :=  class_list
#
$result = reset($tokens);
 $this->process_tag('div', ''); 
}

function reduce_11_class_list_1($tokens, &$result) {
#
# (11) class_list :=  CLASS
#
$result = reset($tokens);
$c =& $tokens[0];
 $this->process_class($c); 
}

function reduce_12_class_list_2($tokens, &$result) {
#
# (12) class_list :=  class_list  CLASS
#
$result = reset($tokens);
$c =& $tokens[1];
 $this->process_class($c); 
}

function reduce_13_tag_with_attributes_1($tokens, &$result) {
#
# (13) tag_with_attributes :=  tag_decl  tag_attributes
#
$result = reset($tokens);

}

function reduce_14_tag_1($tokens, &$result) {
#
# (14) tag :=  tag_decl
#
$result = reset($tokens);

}

function reduce_15_tag_2($tokens, &$result) {
#
# (15) tag :=  tag_with_attributes
#
$result = reset($tokens);

}

function reduce_16_tag_attributes_1($tokens, &$result) {
#
# (16) tag_attributes :=  ATTR_START  attribute_list  ATTR_END
#
$result = reset($tokens);

}

function reduce_17_tag_attributes_2($tokens, &$result) {
#
# (17) tag_attributes :=  HTML_ATTR
#
$result = reset($tokens);
$h =& $tokens[0];
 $this->process_attr_html($h); 
}

function reduce_18_attribute_list_1($tokens, &$result) {
#
# (18) attribute_list :=  ATTR_NAME  ATTR_VALUE
#
$result = reset($tokens);
$n =& $tokens[0];
$v =& $tokens[1];
 $this->process_attr($n, $v);
}

function reduce_19_attribute_list_2($tokens, &$result) {
#
# (19) attribute_list :=  attribute_list  ATTR_SEP  attribute_list
#
$result = reset($tokens);

}

function reduce_20_content_1($tokens, &$result) {
#
# (20) content :=  LINE_CONTENT
#
$result = reset($tokens);

}

function reduce_21_content_2($tokens, &$result) {
#
# (21) content :=
#
$result = reset($tokens);

}

function reduce_22_echo_1($tokens, &$result) {
#
# (22) echo :=  ESCAPED_ECHO
#
$result = reset($tokens);
$e =& $tokens[0];
global $escaping; $escaping = 'ESCAPED_ECHO';
}

function reduce_23_echo_2($tokens, &$result) {
#
# (23) echo :=  UNESCAPED_ECHO
#
$result = reset($tokens);
$e =& $tokens[0];
global $escaping; $escaping = 'UNESCAPED_ECHO';
}

function reduce_24_echo_3($tokens, &$result) {
#
# (24) echo :=  PLAIN_ECHO
#
$result = reset($tokens);
$e =& $tokens[0];
global $escaping; $escaping = 'PLAIN_ECHO';
}

function reduce_25_rule_1($tokens, &$result) {
#
# (25) rule :=  INDENT  tag  content
#
$result = reset($tokens);
$i =& $tokens[0];
$c =& $tokens[2];
 /* echo "INDENT/i tag content/c ($i, $c)\n";      */  $this->process_content_rule($i, $c); 
}

function reduce_26_rule_2($tokens, &$result) {
#
# (26) rule :=  INDENT  tag  TAG_CLOSE
#
$result = reset($tokens);
$i =& $tokens[0];
 /* echo "INDENT/i tag TAG_CLOSE ($i)\n";      */  $this->process_selfclosing_rule($i); 
}

function reduce_27_rule_3($tokens, &$result) {
#
# (27) rule :=  INDENT  tag  echo  content
#
$result = reset($tokens);
$i =& $tokens[0];
$c =& $tokens[3];
 /* echo "INDENT/i tag echo content/c  ($i, $c) $escaping\n"; */  global $escaping; $this->process_echo_rule($i, $c, $escaping); 
}

function reduce_28_rule_4($tokens, &$result) {
#
# (28) rule :=  INDENT  echo  content
#
$result = reset($tokens);
$i =& $tokens[0];
$c =& $tokens[2];
 /* echo "INDENT/i echo content/c ($i, $c) $escaping\n"; */      global $escaping; $this->process_echo_rule($i, $c, $escaping); 
}

function reduce_29_rule_5($tokens, &$result) {
#
# (29) rule :=  INDENT  EXEC  content
#
$result = reset($tokens);
$i =& $tokens[0];
$c =& $tokens[2];
 /* echo "INDENT/i EXEC content/c ($i, $c)\n";     */  $this->process_exec_rule($i, $c); 
}

function reduce_30_rule_6($tokens, &$result) {
#
# (30) rule :=  INDENT  HAML_COMMENT  content
#
$result = reset($tokens);
$i =& $tokens[0];
 /* echo "INDENT/i EXEC content/c ($i, $c)\n";     */  
}

function reduce_31_rule_7($tokens, &$result) {
#
# (31) rule :=  INDENT  COMMENT  content
#
$result = reset($tokens);
$i =& $tokens[0];
$c =& $tokens[2];
 /* echo "INDENT/i COMMENT content/c ($i, $c)\n";  */  $this->process_comment_rule($i, $c); 
}

function reduce_32_rule_8($tokens, &$result) {
#
# (32) rule :=  INDENT  DOCTYPE  content
#
$result = reset($tokens);
$c =& $tokens[2];
 /* "INDENT DOCTYPE content/c ($c)\n";             */  $this->process_doctype($c); 
}

function reduce_33_rule_9($tokens, &$result) {
#
# (33) rule :=  INDENT  ESCAPE  content
#
$result = reset($tokens);
$i =& $tokens[0];
$c =& $tokens[2];
$this->process_content_rule($i, $c); 
}

function reduce_34_rule_10($tokens, &$result) {
#
# (34) rule :=  INDENT  content
#
$result = reset($tokens);
$i =& $tokens[0];
$c =& $tokens[1];
 /* echo "INDENT/i content/c ($i, $c)\n";          */  $this->process_content_rule($i, $c); 
}

function reduce_35_start_1($tokens, &$result) {
#
# (35) 'start' :=  haml_file
#
$result = reset($tokens);

}

var $method = array (
  0 => 'reduce_0_haml_file_1',
  1 => 'reduce_1_haml_file_2',
  2 => 'reduce_2_tag_decl_1',
  3 => 'reduce_3_tag_decl_2',
  4 => 'reduce_4_tag_decl_3',
  5 => 'reduce_5_tag_decl_4',
  6 => 'reduce_6_tag_decl_5',
  7 => 'reduce_7_tag_decl_6',
  8 => 'reduce_8_tag_decl_7',
  9 => 'reduce_9_tag_decl_8',
  10 => 'reduce_10_tag_decl_9',
  11 => 'reduce_11_class_list_1',
  12 => 'reduce_12_class_list_2',
  13 => 'reduce_13_tag_with_attributes_1',
  14 => 'reduce_14_tag_1',
  15 => 'reduce_15_tag_2',
  16 => 'reduce_16_tag_attributes_1',
  17 => 'reduce_17_tag_attributes_2',
  18 => 'reduce_18_attribute_list_1',
  19 => 'reduce_19_attribute_list_2',
  20 => 'reduce_20_content_1',
  21 => 'reduce_21_content_2',
  22 => 'reduce_22_echo_1',
  23 => 'reduce_23_echo_2',
  24 => 'reduce_24_echo_3',
  25 => 'reduce_25_rule_1',
  26 => 'reduce_26_rule_2',
  27 => 'reduce_27_rule_3',
  28 => 'reduce_28_rule_4',
  29 => 'reduce_29_rule_5',
  30 => 'reduce_30_rule_6',
  31 => 'reduce_31_rule_7',
  32 => 'reduce_32_rule_8',
  33 => 'reduce_33_rule_9',
  34 => 'reduce_34_rule_10',
  35 => 'reduce_35_start_1',
);
var $a = array (
  0 => 
  array (
    'symbol' => 'haml_file',
    'len' => 1,
    'replace' => true,
  ),
  1 => 
  array (
    'symbol' => 'haml_file',
    'len' => 2,
    'replace' => true,
  ),
  2 => 
  array (
    'symbol' => 'tag_decl',
    'len' => 1,
    'replace' => true,
  ),
  3 => 
  array (
    'symbol' => 'tag_decl',
    'len' => 2,
    'replace' => true,
  ),
  4 => 
  array (
    'symbol' => 'tag_decl',
    'len' => 3,
    'replace' => true,
  ),
  5 => 
  array (
    'symbol' => 'tag_decl',
    'len' => 2,
    'replace' => true,
  ),
  6 => 
  array (
    'symbol' => 'tag_decl',
    'len' => 3,
    'replace' => true,
  ),
  7 => 
  array (
    'symbol' => 'tag_decl',
    'len' => 2,
    'replace' => true,
  ),
  8 => 
  array (
    'symbol' => 'tag_decl',
    'len' => 1,
    'replace' => true,
  ),
  9 => 
  array (
    'symbol' => 'tag_decl',
    'len' => 2,
    'replace' => true,
  ),
  10 => 
  array (
    'symbol' => 'tag_decl',
    'len' => 1,
    'replace' => true,
  ),
  11 => 
  array (
    'symbol' => 'class_list',
    'len' => 1,
    'replace' => true,
  ),
  12 => 
  array (
    'symbol' => 'class_list',
    'len' => 2,
    'replace' => true,
  ),
  13 => 
  array (
    'symbol' => 'tag_with_attributes',
    'len' => 2,
    'replace' => true,
  ),
  14 => 
  array (
    'symbol' => 'tag',
    'len' => 1,
    'replace' => true,
  ),
  15 => 
  array (
    'symbol' => 'tag',
    'len' => 1,
    'replace' => true,
  ),
  16 => 
  array (
    'symbol' => 'tag_attributes',
    'len' => 3,
    'replace' => true,
  ),
  17 => 
  array (
    'symbol' => 'tag_attributes',
    'len' => 1,
    'replace' => true,
  ),
  18 => 
  array (
    'symbol' => 'attribute_list',
    'len' => 2,
    'replace' => true,
  ),
  19 => 
  array (
    'symbol' => 'attribute_list',
    'len' => 3,
    'replace' => true,
  ),
  20 => 
  array (
    'symbol' => 'content',
    'len' => 1,
    'replace' => true,
  ),
  21 => 
  array (
    'symbol' => 'content',
    'len' => 0,
    'replace' => true,
  ),
  22 => 
  array (
    'symbol' => 'echo',
    'len' => 1,
    'replace' => true,
  ),
  23 => 
  array (
    'symbol' => 'echo',
    'len' => 1,
    'replace' => true,
  ),
  24 => 
  array (
    'symbol' => 'echo',
    'len' => 1,
    'replace' => true,
  ),
  25 => 
  array (
    'symbol' => 'rule',
    'len' => 3,
    'replace' => true,
  ),
  26 => 
  array (
    'symbol' => 'rule',
    'len' => 3,
    'replace' => true,
  ),
  27 => 
  array (
    'symbol' => 'rule',
    'len' => 4,
    'replace' => true,
  ),
  28 => 
  array (
    'symbol' => 'rule',
    'len' => 3,
    'replace' => true,
  ),
  29 => 
  array (
    'symbol' => 'rule',
    'len' => 3,
    'replace' => true,
  ),
  30 => 
  array (
    'symbol' => 'rule',
    'len' => 3,
    'replace' => true,
  ),
  31 => 
  array (
    'symbol' => 'rule',
    'len' => 3,
    'replace' => true,
  ),
  32 => 
  array (
    'symbol' => 'rule',
    'len' => 3,
    'replace' => true,
  ),
  33 => 
  array (
    'symbol' => 'rule',
    'len' => 3,
    'replace' => true,
  ),
  34 => 
  array (
    'symbol' => 'rule',
    'len' => 2,
    'replace' => true,
  ),
  35 => 
  array (
    'symbol' => '\'start\'',
    'len' => 1,
    'replace' => true,
  ),
);
}

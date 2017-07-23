<?

$bracket=array(
 array('(',')'),
);

function check($BracesStr)
{
 global $bracket;
 $stack=array();
 for($i=0;$i<strlen($BracesStr);$i++)
 {
  $ch=$BracesStr[$i];
  for($j=0;$j<count($bracket);$j++)
  {
   if($ch==reset($bracket[$j]))
   { // новая скобка, в стек её
    array_push($stack,$ch);
    break;
   }
   elseif($ch==end($bracket[$j]))
   { // закрытие скобки, проверка
    if(reset($bracket[$j])==end($stack))
    { // скобки совпадают
     array_pop($stack);
     break;
    }
    else
    { // нарушение структуры
     return false;
    }
   }
  }
 }
 return count($stack)==0;;
}

echo var_dump(check("((()))()()))(())()()")); // bool(true)
echo var_dump(check("((()))))()(()))())()()")); // bool(false)

?>
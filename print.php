<?php
/**
 * Created by IntelliJ IDEA.
 * User: bbsyr
 * Date: 2018/9/25
 * Time: 下午2:18
 */

$_int   = 100;
$_float = 400.09;
$_string = "HelloWorld";
$_array = array(1,2,3,4);
/*
 * 1、echo
 * echo（）,并不是函数，是php语句，返回void，不能用来赋值
 */

//双引号，变量名将会被变量值所替代，单引号不会
echo "-------------*************echo**************-------------\n";
echo '$_string test\n'."<br/>";
echo "$_string test\n";

/*
 * 2、print
 * print(),也不是函数，是php语句，返回值为1，
 */
echo "-------------*************print**************-------------\n";
print "helloworld\n";

/*
 * 3、print_r 函数
 * 打印关于变量的易于理解的信息
 * 语法：mixed print_r ( mixed $expression [, bool return ] )
 * 打印关于变量的易于理解的信息,如果给出的是 string、integer 或 float，将打印变量值本身。如果给出的是 array，将会按照一定格式显示键和元素。object 与数组类似。 记住，print_r() 将把数组的指针移到最后边。使用 reset() 可让指针回到开始处。
 * print_r($argv)返回值为true,且输出
 * print_r($argv,true),返回值为$argv的值
 */
echo "-------------*************print_r**************-------------\n";
$a = print_r($_int);
echo "print_r(\$argv)= $a\n";

$b = print_r($_string,true);
echo "print_r(\$argv,true)= $b\n";

print_r($_array);



/*
 * 4、printf函数返回一个格式化后的字符串。
 * 语法：printf(format,arg1,arg2,arg++)
 * 参数 format 是转换的格式，以百分比符号 (“%”) 开始到转换字符结束。下面是可能的 format 值：
 * %% – 返回百分比符号
 * %b – 二进制数
 * %c – 依照 ASCII 值的字符
 * %d – 带符号十进制数
 * %e – 可续计数法（比如 1.5e+3）
 * %u – 无符号十进制数
 * %f – 浮点数(local settings aware)
 * %F – 浮点数(not local settings aware)
 * %o – 八进制数
 * %s – 字符串
 * %x – 十六进制数（小写字母）
 * %X – 十六进制数（大写字母）
 */
echo "-------------*************ptintf**************-------------\n";
printf("the number is %d\n",$_int);
printf("the float number is %f\n",$_float);
printf("the string is %s\n",$_string);

/*
 * 5、sprintf()
 * 使用方法同printf()，printf()是直接打印出来，sprintf()是返回值为格式化后的字符串
 */
echo "-------------*************sprintf**************-------------\n";
$temp = sprintf("the number is %d\n",$_int);
echo $temp;

/*
 * 6、var_tump函数
 * 功能：输出变量的内容、类型或者字符串的内容、类型、长度，常用来调试
 */
echo "-------------*************var_tump**************-------------\n";
var_dump($_int);
var_dump($_float);
var_dump($_string);
var_dump($_array);


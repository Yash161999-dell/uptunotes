<html>
<body>

<?php
if(isset($_GET["y"]) && isset($_GET["d"]))
{
echo "notes";
if($_GET["y"]=="first" && ($_GET["d"]=="cs" || $_GET["d"]=="cse"  || $_GET["d"]=="ce" || $_GET["d"]=="bt" || $_GET["d"]=="it" || $_GET["d"]=="me" || $_GET["d"]=="en" || $_GET["d"]=="ec")&& $_GET["s"]=="c")
{
	
echo "<br><br><a href='source/note/vt/u1.pdf'>Unit 1</a><br>";
echo "<a href='source/note/vt/u2.pdf'>Unit 2</a><br>";
echo "<a href='source/note/vt/u3.pdf'>Unit 3</a><br>";
echo "<a href='source/note/vt/arrayandfunction.pdf'>Unit 4</a><br>";
echo "<a href='source/note/vt/loop.pdf'>Unit 5</a><br>";
echo "<a href='source/note/ag/aunit1.pdf'>Unit 1</a><br><br>";
echo "Or<br><br><br> ";
echo "Other notes";
	echo "<br><a href='source/note/ag/aunit1.pdf'>Unit 1</a><br>";
	echo "<a href='source/note/ag/aunit2.pdf'>Unit 2</a><br>";
	echo "<a href='source/note/ag/aunit3.pdf'>Unit 3</a><br>";
	echo "<a href='source/note/ag/aunit4.pdf'>Unit 4</a><br>";
	echo "<a href='source/note/ag/aunit5.pdf'>Unit 5</a><br>";
	echo "<a href='source/note/ag/afunction.pdf'>Function's</a>";
}
else if($_GET["y"]=="first" && ($_GET["d"]=="cs" || $_GET["d"]=="cse" || $_GET["d"]=="ce" || $_GET["d"]=="me" || $_GET["d"]=="bt" || $_GET["d"]=="it" || $_GET["d"]=="me" || $_GET["d"]=="en" || $_GET["d"]=="ec")&& $_GET["s"]=="ch")
{	
echo "Your Notes will ypdated soon";
}
else if($_GET["y"]=="first" && ($_GET["d"]=="cs" || $_GET["d"]=="cse" || $_GET["d"]=="ce" || $_GET["d"]=="me" || $_GET["d"]=="bt" || $_GET["d"]=="it" || $_GET["d"]=="me" || $_GET["d"]=="en" || $_GET["d"]=="ec")&& $_GET["s"]=="el")
{	
echo "<br><br><a href='note/ele/eun1_watermark.pdf'>Unit 1</a><br>";
echo "<br><br><a href='note/ele/eun2_watermark.pdf'>Unit 2</a><br>";


}
else if($_GET["y"]=="first" && ($_GET["d"]=="cs" || $_GET["d"]=="cse" || $_GET["d"]=="ce" || $_GET["d"]=="me" || $_GET["d"]=="bt" || $_GET["d"]=="it" || $_GET["d"]=="me" || $_GET["d"]=="en" || $_GET["d"]=="ec")&& $_GET["s"]=="m1")
{	
echo "<br><a href='source/note/m1/m14.pdf'>Maths Question Paper(UT) 2104</a><br>";
echo "<br><a href='source/note/m1/m15.pdf'>Maths Question Paper(UT) 2105</a><br>";
echo "<br><a href='source/note/m1/m16.pdf'>Maths Question Paper(UT) 2106</a><br>";
echo "<br><a href='source/note/m1/m17.pdf'>Maths Question Paper(UT) 2107</a><br>";
echo "<br><a href='source/note/m1/m18.pdf'>Maths Question Paper(UT) 2108</a><br><br>";

}







else if($_GET["y"]=="first" && ($_GET["d"]=="cs" || $_GET["d"]=="cse" || $_GET["d"]=="ce" || $_GET["d"]=="me" || $_GET["d"]=="bt" || $_GET["d"]=="it" || $_GET["d"]=="me" || $_GET["d"]=="en" || $_GET["d"]=="ec")&& $_GET["s"]=="m2")
{	
echo "Your Notes will ypdated soon";
}
else if($_GET["y"]=="first" && ($_GET["d"]=="cs" || $_GET["d"]=="cse" || $_GET["d"]=="ce" || $_GET["d"]=="me" || $_GET["d"]=="bt" || $_GET["d"]=="it" || $_GET["d"]=="me" || $_GET["d"]=="en" || $_GET["d"]=="ec")&& $_GET["s"]=="py")
{	
echo "Your Notes will ypdated soon";
}
else if($_GET["y"]=="first" && ($_GET["d"]=="cs" || $_GET["d"]=="cse" || $_GET["d"]=="ce" || $_GET["d"]=="me" || $_GET["d"]=="bt" || $_GET["d"]=="it" || $_GET["d"]=="ce" || $_GET["d"]=="en" || $_GET["d"]=="ec")&& $_GET["s"]=="pc")
{	
echo "Your Notes will ypdated soon";
}


else if($_GET["y"]=="second" && ($_GET["d"]=="cse" || $_GET["d"]=="cs" || $_GET["d"]=="it") && $_GET["s"]=="di")
{
echo "<br><a href='note/disc/dis1-2.pdf'>Unit 1and2</a><br>";
echo "<br><a href='source/note/disc/dis2&3.pdf'>Unit 2&3</a><br>";
echo "<br><a href='source/note/disc/disct-2.pdf'>Unit 2 part2</a><br>";
echo "<br><a href='source/note/disc/disct-2-2.pdf'>Unit 2 part2ofpart2</a><br>";
echo "<br><a href='source/note/disc/dis4.pdf'>Unit 4</a><br>";
echo "<br><a href='source/note/disc/POSET.pdf'>POSET</a><br>";
}
else if($_GET["y"]=="second" && ($_GET["d"]=="cse" || $_GET["d"]=="cs" || $_GET["d"]=="it") && $_GET["s"]=="co")
{	
echo "<br><a href='source/note/itco/unit1,2(a).pdf'>Unit 1and2 (a)</a><br><br>";
echo "<br><a href='source/note/itco/unit1,2(b).pdf'>Unit 1and2 (b)</a><br>";
echo "<br><a href='source/note/itco/unit1,3(c).pdf'>Unit 1and3 (c)</a><br>";
echo "<br><a href='source/note/itco/book(1,2,3).pdf'>Book of unit 1,2&3</a><br>";
echo "<br><a href='source/note/itco/unit3.pdf'>Unit 3</a><br>";
echo "<br><a href='source/note/itco/unit4(a).pdf'>Unit 4 (a)</a><br>";
echo "<br><a href='source/note/itco/unit4(b).pdf'>Unit 4 (b)</a><br>";
echo "<br><a href='source/note/itco/unit4(c).pdf'>Unit 4 (c)</a><br>";
echo "<br><a href='source/note/itco/unit4(d).pdf'>Unit 4 (d)</a><br>";
echo "<br><a href='source/note/itco/unit4(e).pdf'>Unit 4 (e)</a><br>";
echo "<br><a href='source/note/itco/unit4.pdf'>Unit 4 book</a><br>";
echo "<br><a href='source/note/itco/unit4&5.pdf'>Unit 4 & 5</a><br>";
}
else if($_GET["y"]=="second" && ($_GET["d"]=="cse" || $_GET["d"]=="cs" || $_GET["d"]=="it") && $_GET["s"]=="dacs")
{
echo "<br><a href='source/note/ds/as.pdf'>Array and Stack</a><br>";
echo "<br><a href='source/note/ds/gt.pdf'>Graph and Tree</a><br>";
echo "<br><a href='source/note/ds/cll.pdf'>Circula,Double,Dynamic implementation of Linklist and Application of Linklist </a><br>";
echo "<br><a href='source/note/ds/as.pdf'>Array and Stack</a><br>";
echo "<br><a href='source/note/ds/s.pdf'>Merge Sort ,Radix Sort and Practise Question of Sorting</a><br>";
echo "<br><a href='source/note/ds/GRAPH.pdf'>GRAPH TRAVERSE</a><br>";
echo "<br><a href='source/note/ds/hashing.pdf'>HASHING</a><br>";
echo "<br><a href='source/note/ds/introgR.pdf'>Intro of GRAPH and Represantion</a><br>";
echo "<br><a href='source/note/ds/MST.pdf'>MST</a><br>";
echo "<br><a href='source/note/ds/primalgo.pdf'>Prim Algorathim</a><br>";
echo "<br><a href='source/note/ds/queue.pdf'>QUEUE</a><br>";
echo "<br><a href='source/note/ds/SPA.pdf'>Shortest Path Algorathim</a><br>";
echo "<br><a href='source/note/ds/spanningtree.pdf'>Spanning Tree</a><br>";
echo "<br><a href='source/note/ds/singly link list.pdf'>Singly Link Lisi</a><br>";
echo "<br><a href='source/note/ds/ds 2 marks.pdf'>Data Structure 2 marks</a><br>";
}





else if(($_GET["y"]=="first" || $_GET["y"]=="second" || $_GET["y"]=="third" || $_GET["y"]=="fourth") && ($_GET["d"]=="cs" || $_GET["d"]=="cse" || $_GET["d"]=="ce" || $_GET["d"]=="me" || $_GET["d"]=="bt" || $_GET["d"]=="it" || $_GET["d"]=="me" || $_GET["d"]=="en" || $_GET["d"]=="ec")&& $_GET["s"]=="py")
{
echo "<br><a href='source/note/python/Basic Data Structures.pdf'>Basic Data Structures</a><br>";
echo "<br><a href='source/note/python/File Handling.pdf'>File Handling</a><br>";
echo "<br><a href='source/note/python/Functions.pdf'>Functions</a><br>";
echo "<br><a href='source/note/python/model_python_paper.pdf'>model_python_paper</a><br>";
echo "<br><a href='source/note/python/model_python_paper-1.pdf'>model_python_paper-1</a><br>";
echo "<br><a href='source/note/python/Object Oriented Programming.pdf'>Object Oriented Programming</a><br>";
echo "<br><a href='source/note/PYTHON NOTES.pdf'>PYTHON NOTES</a><br>";
echo "<br><a href='source/note/python/python_tutorial.pdf'>python_tutorial</a><br>";
echo "<br><a href='source/note/python/Solved Problems for Practice.pdf'>Solved Problems for Practice</a><br>";



}

else if($_GET["y"]=="second" && ($_GET["d"]=="cse" || $_GET["d"]=="cs" || $_GET["d"]=="it") && $_GET["s"]=="ee")
{
echo "<br><a href='note/etoe/KOE 048 Unit 1 & 2.pdf'>Unit 1 & 2</a><br>";


}

else if($_GET["y"]=="second" && ($_GET["d"]=="cse" || $_GET["d"]=="cs" || $_GET["d"]=="it") && $_GET["s"]=="op")
{
echo "<br><br><br><a href='source/note/op/operating system.pdf'>Unit 1</a><br>";
echo "<br><br><br><a href='source/note/op/operating system.pdf'>Unit 1</a><br>";
echo "<br><br><br><a href='source/note/op/operating system.pdf'>Unit 1</a><br>";



}

}
?>
</html>


<?php
// تعريف مصفوفة جديدة
$array = array("YOUSEF", "SRHAN", "ALSABRI");

// طباعة عناصر المصفوفة
echo "First element: " . $array[0] . "<br>"; // أول عنصر
echo "Second element: " . $array[1] . "<br>"; // ثاني عنصر
echo "Third element: " . $array[2] . "<br>"; // ثالث عنصر

//`array_push()`
//إضافة عنصر إلى نهاية المصفوفة

$array = array("YOUSEF", "SRHAN");
array_push($array, "ALSABRI");

// طباعة المصفوفة بعد الإضافة
print_r($array); // النتيجة: Array ( [0] => YOUSEF [1] => SRHAN [2] => ALSABRI )

#### 3. `array_pop()`//


$array = array("YOUSEF", "SRHAN", "ALSABRI","<br>");
array_pop($array);

// طباعة المصفوفة بعد الإزالة
print_r($array); // النتيجة: Array ( [0] => YOUSEF [1] => SRHAN )
//`array_merge()`
//دمج مصفوفتين او اكثر


$array1 = array("<br>","rabi", "SRHAN");
$array2 = array("MOHAMMED", "ALSABRI");
$result = array_merge($array1, $array2);

// طباعة المصفوفة المدمجة
print_r($result); 
//التحقق اذا كان العنصر موجود ام لا
$array = array("lab2", "lab1", "cherry");
$exists = in_array("lab1", $array ,"<br>");

// طباعة النتيجة
echo $exists ? "Exists" : "Does not exist","<br>"; // النتيجة: Exists
### دوال السلاسل النصية في PHP

// `strlen()`
//حساب طول السلسلة النصية.

$string = "Hello, world!";
$length = strlen($string);

// طباعة طول السلسلة النصية
echo "Length: $length"; // النتيجة: Length: 13

// strtoupper()
//تحويل النص إلى أحرف كبيرة

$string = "Hello, world!";
$upper = strtoupper($string);

// طباعة السلسلة النصية بالأحرف الكبيرة
echo "Uppercase: $upper"; // النتيجة: Uppercase: HELLO, WORLD!

// strtolower()
//تحويل النص إلى أحرف صغيرة

$string = "Hello, WORLD!";
$lower = strtolower($string);
// طباعة السلسلة النصية بالأحرف الصغيرة
echo "Lowercase: $lower"; // النتيجة: Lowercase: hello, world!

// substr()
//اقتطاع جزء من السلسلة النصية

$string = "Hello, world!";
$part = substr($string, 7, 5); // بدءًا من الموضع 7، اجلب 5 أحرف

// طباعة الجزء المقتطع
echo "Substring: $part"; // النتيجة: Substring: world



// str_replace()
//استبدال جزء من النص بجزء آخر


$string = "Hello, world!";
$newString = str_replace("world", "web PHP", $string);

// طباعة النص بعد الاستبدال
echo "Replaced: $newString"; // النتيجة: Replaced: Hello, PHP

?>

<?php
// 1. المتغيرات
// هنا نعرف متغيرات مختلفة مثل الاسم والعمر والطول وما إذا كان الشخص طالباً
$name = "Ahmed";
$age = 25;
$height = 1.75;
$isStudent = true;

// 2. الطباعة باستخدام echo
// نستخدم echo لطباعة معلومات الشخص مثل الاسم، العمر، الطول، وحالة كونه طالب أم لا
echo "Name: $name<br>";
echo "Age: $age<br>";
echo "Height: $height<br>";
echo "Is Student: " . ($isStudent ? 'Yes' : 'No') . "<br>";

// 3. العمليات الحسابية ومعاملات المقارنة
// معرفة بعض الأرقام لاستخدامها في العمليات الحسابية والمقارنة
$a = 77;
$b = 71;

// العمليات الحسابية الأساسية
echo "a + b = " . ($a + $b) . "<br>"; // الجمع
echo "a - b = " . ($a - $b) . "<br>"; // الطرح
echo "a * b = " . ($a * $b) . "<br>"; // الضرب
echo "a / b = " . ($a / $b) . "<br>"; // القسمة
echo "a % b = " . ($a % $b) . "<br>"; // باقي القسمة

// معاملات المقارنة
echo "a == b: " . ($a == $b ? 'True' : 'False') . "<br>"; // مساواة
echo "a != b: " . ($a != $b ? 'True' : 'False') . "<br>"; // عدم مساواة
echo "a > b: " . ($a > $b ? 'True' : 'False') . "<br>";   // أكبر من
echo "a < b: " . ($a < $b ? 'True' : 'False') . "<br>";   // أصغر من
echo "a >= b: " . ($a >= $b ? 'True' : 'False') . "<br>"; // أكبر من أو يساوي
echo "a <= b: " . ($a <= $b ? 'True' : 'False') . "<br>"; // أصغر من أو يساوي

// 4. الشرط if
// التحقق إذا كان العمر أكبر من 18 ثم طباعة رسالة
if ($age > 18) {
    echo "You are an adult.<br>";
}

// 5. الشرط if else
// التحقق إذا كان العمر أكبر من 18 وطباعة رسالة مختلفة إذا لم يكن كذلك
if ($age > 18) {
    echo "You are an adult.<br>";
} else {
    echo "You are a minor.<br>";
}

// 6. الحلقة for
// استخدام الحلقة for لتكرار مجموعة من التعليمات خمس مرات
for ($i = 0; $i < 5; $i++) {
    echo "This is iteration $i.<br>";
}

// 7. الحلقة while
// استخدام الحلقة while لتكرار التعليمات طالما كان الشرط صحيحاً
$i = 0;
while ($i < 5) {
    echo " $i.<br>";
    $i++;
}

// 8. الحلقة do while
// استخدام الحلقة do while لتكرار التعليمات مرة واحدة على الأقل حتى إذا كان الشرط خاطئاً
$i = 0;
do {
    echo " $i.<br>";
    $i++;
} while ($i < 5);

// 9. جملة switch
// استخدام switch لتحديد اليوم بناءً على قيمة معينة وطباعة رسالة مناسبة لكل حالة
$day = 3;
switch ($day) {
    case 1:
        echo "Today is Monday.<br>";
        break;
    case 2:
        echo "Today is Tuesday.<br>";
        break;
    case 3:
        echo "Today is Wednesday.<br>";
        break;
    default:
        echo "Invalid day.<br>";
        break;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Arabic Auto Summarize Class</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" media="all" />

<style type="text/css">
.summary { background-color:#eeee80; }
</style>

</head>

<body>

<div class="Paragraph" dir="rtl">
<h2 dir="ltr">Example Output:</h2>
<?php
/**
 * Example of Arabic Auto Summarize Class
 *
 * @category  I18N
 * @package   I18N_Arabic
 * @author    Khaled Al-Sham'aa <khaled@ar-php.org>
 * @copyright 2006-2016 Khaled Al-Sham'aa
 *
 * @license   LGPL <http://www.gnu.org/licenses/lgpl.txt>
 * @link      http://www.ar-php.org
 */

error_reporting(E_STRICT);
$time_start = microtime(true);

require '../../Arabic.php';
$Arabic = new I18N_Arabic('AutoSummarize');

$rate     = 25;
$title    = 'أضخم تجربة علمية لدراسة بنية المادة المعتمة بمصادم الهدرونات الكبير';
$contents = <<<END
قال علماء في مركز أبحاث الفيزياء التابع للمنظمة الأوروبية للابحاث النووية يوم الجمعة
أنهم حققوا تصادما بين جسيمات بكثافة قياسية في إنجاز مهم في برنامجهم لكشف أسرار الكون.
وجاء التطور في الساعات الأولى بعد تغذية مصادم الهدرونات الكبير بحزمة أشعة بها
جسيمات أكثر بحوالي ستة في المئة لكل وحدة بالمقارنة مع المستوى القياسي السابق
الذي سجله مصادم تيفاترون التابع لمختبر فرميلاب الأمريكي العام الماضي.
وكل تصادم في النفق الدائري لمصادم الهدرونات البالغ طوله 27 كيلومترا تحت الأرض
بسرعة أقل من سرعة الضوء يحدث محاكاة للانفجار العظيم الذي يفسر به علماء نشوء الكون
قبل 13.7 مليار سنة. وكلما زادت "كثافة الحزمة" أو ارتفع عدد الجسيمات فيها زاد
عدد التصادمات التي تحدث وزادت أيضا المادة التي يكون على العلماء تحليلها.
ويجري فعليا انتاج ملايين كثيرة من هذه "الانفجارات العظيمة المصغرة" يوميا.
وقال رولف هوير المدير العام للمنظمة الاوروبية للأبحاث النووية ومقرها على الحدود
الفرنسية السويسرية قرب جنيف أن "كثافة الحزمة هي الأساس لنجاح مصادم الهدرونات الكبير
ولذا فهذه خطوة مهمة جدا"، وأضاف "الكثافة الأعلى تعني مزيدا من البيانات، ومزيد
من البيانات يعني إمكانية أكبر للكشف." وقال سيرجيو برتولوتشي مدير الأبحاث في المنظمة
"يوجد إحساس ملموس بأننا على أعتاب كشف جديد". وفي حين زاد الفيزيائيون والمهندسون
في المنظمة كثافة حزم الأشعة على مدى الأسبوع المنصرم قال جيمس جيليه المتحدث باسم المنظمة
أنهم جمعوا معلومات تزيد على ما جمعوه على مدى تسعة أشهر من عمل مصادم الهدرونات في 2010.
وتخزن تلك المعلومات على آلاف من أقراص الكمبيوتر. ويمثل المصادم البالغة تكلفته
عشرة مليارات دولار أكبر تجربة علمية منفردة في العالم وقد بدأ تشغيله في نهاية
مارس آذار 2010. وبعد الإغلاق الدائم لمصادم تيفاترون في الخريف القادم سيصبح
مصادم الهدرونات المصادم الكبير الوحيد الموجود في العالم. ومن بين أهداف
مصادم الهدرونات الكبير معرفة ما إذا كان الجسيم البسيط المعروف بإسم جسيم هيجز
أو بوزون هيجز موجود فعليا. ويحمل الجسيم إسم العالم البريطاني بيتر هيجز
الذي كان أول من افترض وجوده كعامل أعطي الكتلة للجسيمات بعد الإنفجار العظيم.
ومن خلال متابعة التصادمات على أجهزة الكمبيوتر في المنظمة الأوروبية للأبحاث النووية
وفي معامل في أنحاء العالم مرتبطة بها يأمل العلماء أيضا أن يجدوا دليلا قويا على
وجود المادة المعتمة التي يعتقد أنها تشكل حوالي ربع الكون المعروف وربما الطاقة المعتمة
التي يعتقد أنها تمثل حوالي 70 في المئة من الكون. ويقول علماء الفلك أن تجارب
المنظمة الأوروبية للأبحاث النووية قد تلقي الضوء أيضا على نظريات جديدة بازغة
تشير إلى أن الكون المعروف هو مجرد جزء من نظام لأكوان كثيرة غير مرئية لبعضها البعض
ولا توجد وسائل للتواصل بينها. ويأملون أيضا أن يقدم مصادم الهدرونات الكبير
الذي سيبقى يعمل على مدى عقد بعد توقف فني لمدة عام في 2013 بعض الدعم
لدلائل يتعقبها باحثون آخرون على أن الكون المعروف سبقه كون آخر قبل الانفجار العظيم.
وبعد التوقف عام 2013 يهدف علماء المنظمة الأوروبية للأبحاث النووية إلى زيادة
الطاقة الكلية لكل تصادم بين الجسيمات من الحد الاقصى الحالي البالغ 7 تيرا الكترون فولت
إلى 14 تيرا الكترون فولت. وسيزيد ذلك أيضا من فرصة التوصل لاكتشافات جديدة فيما تصفه
المنظمة بأنه "الفيزياء الجديدة" بما يدفع المعرفة لتجاوز ما يسمى النموذج المعياري
المعتمد على نظريات العالم البرت اينشتاين في اوائل القرن العشرين.
END;

    $contents = str_replace("\n", '', $contents);

    $highlighted = $Arabic->highlightRateSummary($contents, $rate, $_GET['q'], 'summary');
    $summary = $Arabic->doRateSummarize($contents, $rate, $_GET['q']);

    echo "<h3>$title:</h3>";
    echo '<a href="AutoSummarize.php">ملخص عادي</a> | ';
    echo '<a href="AutoSummarize.php?q=هيجنز">';
    echo 'الملخص لو كنت تبحث عن كلمة هيجنز</a>';
    echo "<h4>الملخص</h4>$summary";
    echo "<h4>النص الكامل</h4>$highlighted";
?>
</div><br />
<div class="Paragraph">
<h2>Example Code:</h2>
<?php
$code = <<< ENDALL
<?php
    require '../../Arabic.php';
    \$Arabic = new I18N_Arabic('AutoSummarize');

    \$rate     = 25;
    \$title    = 'أضخم تجربة علمية لدراسة بنية المادة المعتمة بمصادم الهدرونات الكبير';
    \$contents = <<<END
قال علماء في مركز أبحاث الفيزياء التابع للمنظمة الأوروبية للابحاث النووية يوم الجمعة
أنهم حققوا تصادما بين جسيمات بكثافة قياسية في إنجاز مهم في برنامجهم لكشف أسرار الكون.
وجاء التطور في الساعات الأولى بعد تغذية مصادم الهدرونات الكبير بحزمة أشعة بها
جسيمات أكثر بحوالي ستة في المئة لكل وحدة بالمقارنة مع المستوى القياسي السابق
الذي سجله مصادم تيفاترون التابع لمختبر فرميلاب الأمريكي العام الماضي.
وكل تصادم في النفق الدائري لمصادم الهدرونات البالغ طوله 27 كيلومترا تحت الأرض
بسرعة أقل من سرعة الضوء يحدث محاكاة للانفجار العظيم الذي يفسر به علماء نشوء الكون
قبل 13.7 مليار سنة. وكلما زادت "كثافة الحزمة" أو ارتفع عدد الجسيمات فيها زاد
عدد التصادمات التي تحدث وزادت أيضا المادة التي يكون على العلماء تحليلها.
ويجري فعليا انتاج ملايين كثيرة من هذه "الانفجارات العظيمة المصغرة" يوميا.
وقال رولف هوير المدير العام للمنظمة الاوروبية للأبحاث النووية ومقرها على الحدود
الفرنسية السويسرية قرب جنيف أن "كثافة الحزمة هي الأساس لنجاح مصادم الهدرونات الكبير
ولذا فهذه خطوة مهمة جدا"، وأضاف "الكثافة الأعلى تعني مزيدا من البيانات، ومزيد
من البيانات يعني إمكانية أكبر للكشف." وقال سيرجيو برتولوتشي مدير الأبحاث في المنظمة
"يوجد إحساس ملموس بأننا على أعتاب كشف جديد". وفي حين زاد الفيزيائيون والمهندسون
في المنظمة كثافة حزم الأشعة على مدى الأسبوع المنصرم قال جيمس جيليه المتحدث باسم المنظمة
أنهم جمعوا معلومات تزيد على ما جمعوه على مدى تسعة أشهر من عمل مصادم الهدرونات في 2010.
وتخزن تلك المعلومات على آلاف من أقراص الكمبيوتر. ويمثل المصادم البالغة تكلفته
عشرة مليارات دولار أكبر تجربة علمية منفردة في العالم وقد بدأ تشغيله في نهاية
مارس آذار 2010. وبعد الإغلاق الدائم لمصادم تيفاترون في الخريف القادم سيصبح
مصادم الهدرونات المصادم الكبير الوحيد الموجود في العالم. ومن بين أهداف
مصادم الهدرونات الكبير معرفة ما إذا كان الجسيم البسيط المعروف بإسم جسيم هيجز
أو بوزون هيجز موجود فعليا. ويحمل الجسيم إسم العالم البريطاني بيتر هيجز
الذي كان أول من افترض وجوده كعامل أعطي الكتلة للجسيمات بعد الإنفجار العظيم.
ومن خلال متابعة التصادمات على أجهزة الكمبيوتر في المنظمة الأوروبية للأبحاث النووية
وفي معامل في أنحاء العالم مرتبطة بها يأمل العلماء أيضا أن يجدوا دليلا قويا على
وجود المادة المعتمة التي يعتقد أنها تشكل حوالي ربع الكون المعروف وربما الطاقة المعتمة
التي يعتقد أنها تمثل حوالي 70 في المئة من الكون. ويقول علماء الفلك أن تجارب
المنظمة الأوروبية للأبحاث النووية قد تلقي الضوء أيضا على نظريات جديدة بازغة
تشير إلى أن الكون المعروف هو مجرد جزء من نظام لأكوان كثيرة غير مرئية لبعضها البعض
ولا توجد وسائل للتواصل بينها. ويأملون أيضا أن يقدم مصادم الهدرونات الكبير
الذي سيبقى يعمل على مدى عقد بعد توقف فني لمدة عام في 2013 بعض الدعم
لدلائل يتعقبها باحثون آخرون على أن الكون المعروف سبقه كون آخر قبل الانفجار العظيم.
وبعد التوقف عام 2013 يهدف علماء المنظمة الأوروبية للأبحاث النووية إلى زيادة
الطاقة الكلية لكل تصادم بين الجسيمات من الحد الاقصى الحالي البالغ 7 تيرا الكترون فولت
إلى 14 تيرا الكترون فولت. وسيزيد ذلك أيضا من فرصة التوصل لاكتشافات جديدة فيما تصفه
المنظمة بأنه "الفيزياء الجديدة" بما يدفع المعرفة لتجاوز ما يسمى النموذج المعياري
المعتمد على نظريات العالم البرت اينشتاين في اوائل القرن العشرين.
END;

    \$contents = str_replace("\\n", '', \$contents);

    \$highlighted = \$Arabic->highlightRateSummary(\$contents, \$rate, \$_GET['q'], 'summary');
    \$summary = \$Arabic->doRateSummarize(\$contents, \$rate, \$_GET['q']);

    echo "<h3>\$title:</h3>";
    echo '<a href="AutoSummarize.php">ملخص عادي</a> | ';
    echo '<a href="AutoSummarize.php?q=هيجنز">';
    echo 'الملخص لو كنت تبحث عن كلمة هيجنز</a>';
    echo "<h4>الملخص</h4>\$summary";
    echo "<h4>النص الكامل</h4>\$highlighted";
ENDALL;

highlight_string($code);

$time_end = microtime(true);
$time = $time_end - $time_start;

echo "<hr />Total execution time is $time seconds<br />\n";
echo 'Amount of memory allocated to this script is ' . memory_get_usage() . ' bytes';

$included_files = get_included_files();
echo '<h4>Names of included or required files:</h4><ul>';

foreach ($included_files as $filename) {
    echo "<li>$filename</li>";
}

echo '</ul>';
?>
<a href="../Docs/I18N_Arabic/_Arabic---AutoSummarize.php.html" target="_blank">Related Class Documentation</a>
</div>
</body>
</html>

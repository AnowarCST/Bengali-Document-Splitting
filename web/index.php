<?php
/*

# Bengali-Document-Splitting
You can split bengali text documen. There may have quotes in between sentences in text.

It will segment document to paragraph and paragraph to sentences.

**This may be used full free for Bengali Natural Language Processing

Thanks
Md. Mazharul Haque
mazharul_13@yahoo.com

*/

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>

<?php
//$str = "His \"is । as\" sdfs d। sd";
//$keywords = preg_split("/।(?=(?:[^\"]|\"[^\"]*\")*$)/", $str);
//ini_set("pcre.recursion_limit", "512");

$str = "ধর্মীয় অনুভূতিতে আঘাতের অভিযোগে করা আরও ১০ মামলায় হাইকোর্ট থেকে জামিন পেয়েছেন সাবেক মন্ত্রী আবদুল লতিফ সিদ্দিকী। বিচারপতি মো. নিজামুল হক ও বিচারপতি মো. ফরিদ আহমদ শিবলীর সমন্বয়ে ঘটিত হাইকোর্ট বেঞ্চ আজ মঙ্গলবার এ আদেশ দেন।
আদালতে লতিফ সিদ্দিকীর পক্ষে শুনানি করেন আইনজীবী জ্যোতির্ময় বড়ুয়া। রাষ্ট্রপক্ষে ছিলেন ডেপুটি অ্যাটর্নি জেনারেল শেখ এ কে এম মনিরুজ্জামান।
এর আগে গত ২৬ মে ধর্মীয় অনুভূতিতে আঘাতের অভিযোগে করা আরও সাত মামলায় সাবেক এই মন্ত্রীকে ছয় মাসের অন্তর্বর্তী জামিন দিয়েছেন হাইকোর্ট। একই সঙ্গে এসব মামলার কার্যক্রম ছয় মাসের জন্য স্থগিত করেছিলেন আদালত। গত বছর সেপ্টেম্বরে যুক্তরাষ্ট্রের নিউইয়র্কে এক অনুষ্ঠানে হজ ও তাবলিগ জামাত নিয়ে বিরূপ মন্তব্য করে সমালোচনার মুখে পড়েন আবদুল লতিফ সিদ্দিকী। এ ঘটনার পর আওয়ামী লীগের সভাপতিমণ্ডলীর এই সদস্য দল থেকে বহিষ্কৃত হন। একই ঘটনায় ধর্মীয় অনুভূতিতে আঘাত ও কটূক্তির অভিযোগে তাঁর বিরুদ্ধে রাজধানী ঢাকাসহ দেশের বিভিন্ন জেলায় বেশ কয়েকটি মামলা হয়। নির্ধারিত সময়ে আদালতে হাজির না হওয়ায় প্রতিটি মামলায় তাঁর বিরুদ্ধে গ্রেপ্তারি পরোয়ানা জারি করেন আদালত। গত বছরের ২৫ নভেম্বর ধানমন্ডি থানায় আত্মসমর্পণ করার পর আদালত তাঁকে কারাগারে পাঠানোর নির্দেশ দেন।
";
$str1 = 'মঙ্গলবার লতিফ সিদ্দিকীর আবেদনের ওপর শুনানি করে বিচারপতি মো. নিজামুল হক ও বিচারপতি মো. ফরিদ আহমদ শিবলীর বেঞ্চ রুলসহ এই আদেশ দেয়।
এরমধ্যে চাঁপাইনবাবগঞ্জ, লক্ষ্মীপুর ও ঢাকাল একটি করে এবং চট্টগ্রামের সাতটি মামলা রয়েছে।
তবে একই অভিযোগে আরও পাঁচটি মামলা থাকায় আওয়ামী লীগের বহিষ্কৃত নেতা লতিফ এখনই মুক্তি পাচ্ছেন না।
আদালতে তার পক্ষে শুনানি করেন ব্যারিস্টার জ্যোতির্ময় বড়ুয়া। রাষ্ট্রপক্ষে ছিলেন ডেপুটি অ্যাটর্নি জেনারেল শেখ এ কে এম মনিরুজ্জামান কবির।
এই দশ মামলায় লতিফকে অন্তবর্তীকালীন জামিন দেওয়ার পাশাপাশি মামলাগুলোর কার্যক্রম ছয় মাসের জন্য স্থগিত করেছে আদালত।
এসব মামলা কেন বাতিল করা হবে না তা জানতে চেয়ে একটি রুলও জারি করা হয়েছে, মামলার বাদী ও সরকারকে চার সপ্তাহের মধ্যে যার জবাব দিতে হবে।
এর আগে ঢাকার হাকিম আদালত ও জজ আদালত এসব মামলায় লতিফের জামিন নাকচ করেছিল।
আদেশের পর ডেপুটি অ্যাটর্নি জেনারেল মনিরুজ্জামান কবির বলেন, "এ নিয়ে মোট ১৭টি মামলায় লতিফ সিদ্দিকী জামিন পেলেন। তবে আরও পাঁচটি মামলা থাকায় তিনি আপাতত মুক্তি পাচ্ছেন না।"
';


function filterQuote($i){return $i != '"';}

//echo "<pre>"; print_r($keywords2);
$docArr = array(array());
$docCounter = 0;


function splitDocToParaAndSent($str)
{
	global $docCounter;
	global $docArr;
	$paraArrays = array();
	$paraCounter = 0;
	$paragraphArr = explode(''.chr(10).'', $str);	
	foreach($paragraphArr as $key=>$para):
		if(empty($para)) continue;
		$paraCounter++;
		$str = trim($para);
		$sentenceArr = preg_split("[।]", $str);
//		echo "<pre>";print_r($sentenceArr);
		$senWithQuote = preg_grep('/^.*\".*/', $sentenceArr);
	//	echo "<pre>";print_r($senWithQuote);
		
		$sentFlag = 0;
		$start = 0;
		$end = 0;
		foreach($senWithQuote as $key=>$val)
		{
			if($sentFlag == 0)
			{
				$start = $key;
				$sentFlag = 1;
			}
			else 
			{
				$end = $key;
				$sentFlag = 0;
				
				for($i=$start+1; $i<=$end; $i++)
				{
					$sentenceArr[$start] = $sentenceArr[$start].'।'.$sentenceArr[$i];
					$sentenceArr[$i] = '';
				}
				
			}
		}
		
		$sentenceArr = array_filter($sentenceArr);
		$sentenceArr = array_filter($sentenceArr, "filterQuote"); 	
		$sentenceArr = array_values($sentenceArr);
		$sentenceArr = array_map('trim', $sentenceArr);
	//	echo "<pre>";print_r($sentenceArr);	
		$paraArrays[$paraCounter] = $sentenceArr;
	endforeach;
	$docArr[$docCounter] = $paraArrays;
	$docCounter++;
}
splitDocToParaAndSent($str);
splitDocToParaAndSent($str1);
echo "<pre>";print_r($docArr);	

?>

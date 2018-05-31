<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

          $this->call('UsersTableSeeder');
          $this->call('ConfigsTableSeeder');
          $this->call('AppsTableSeeder');
          $this->call('SharesTableSeeder');
          $this->call('PagesTableSeeder');
    }
}

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $users = array(
            array(
                'username' => 'admin',
                'password' => Hash::make('admin'),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ),
			
			array(
			    'username' => 'developer',
                'password' => Hash::make('developer'),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
			)
		
        );

        DB::table('users')->insert($users);
    }
}


class ConfigsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('configs')->delete();

        $url = $_SERVER['HTTP_HOST'] . '/' . substr(__DIR__, strlen($_SERVER[ 'DOCUMENT_ROOT' ]));
        $url = str_replace('/local/database/seeds', '', $url);
        $url = str_replace('\local\database\seeds', '', $url);
        $url = str_replace("\\", "/", $url);

        $configs = array(
            array (
                'nume' => 'basic',
                'valoare' => '{"sitename":"ViralFB","sitemetaname":"Viral facebook apps for entertainment","sitedescription":"Real entertainment source, hottest apps from the internet are on us.","logo":"files\\\\logoforsite.png","favicon":"files\\\\favicon.png","fburl":"https:\\/\\/www.facebook.com\\/facebook\\/?fref=ts","fbappid":"140323583199959","disp-latest-app":"on","disp-fb-comm":"on","modal-time":"5","modal-title":"Share on Facebook","modal-text":"Don\'t forget to share on Facebook. Your friends will appreciate this.","graphtitle":"ViralFB - Viral facebook apps for entertainment","graphdescription":"Real entertainment source, hottest apps from the internet are on us.","graphimg":"","headcode":"","bodycode":""}',
            ),
            array (
                'nume' => 'colors',
                'valoare' => '{"pagebackground":"#ffffff","headerbar":"#ffffff","latestapptext":"#0a51a1","lastappbtn":"#0a51a1","newappborder":"#0a51a1","newappbtn":"#0a51a1","footercolor":"#0a51a1","containercolor":"#ffffff","containerinside":"#ffffff"}',
            ),
            array (
                'nume' => 'languages',
                'valoare' => '{"active":"en", "en":{"name":"English","code":"en","login":"Continue with Facebook","share":"Share on Facebook","tryagain":"Try again","latestapp":"Latest app","generating":"Generating result..","moreapps":"Load more apps..","findmedia":"Find out your result","backtop":"Back to top","letsdoit":"Let\'s do it!"},"ro":{"name":"Română","code":"ro","login":"Află rezultatul tău acum","share":"Distribuie pe facebook","tryagain":"Încearcă din nou","latestapp":"Ultima aplicație","generating":"Se generează rezultatul tău..","moreapps":"Mai multe aplicatii..","findmedia":"Află rezultatul tău","backtop":"Înapoi sus","letsdoit":"Să începem!"}}',
            ),
            array (
                'nume' => 'secr',
                'valoare' => '',
            ),
            array (
                'nume' => 'tokenapp',
                'valoare' => '',
            ),
            array (
                'nume' => 'version',
                'valoare' => '{"version":"2.0","version-name":"ViralFB v2.0"}',
            ),
            array (
                'nume' => 'widgets',
                'valoare' => '{"header":{},"under-header":{},"sidebar":{"widget1":{"wtitle":"Advertisemet example","wcontent":"<div class=\\"sidebar-module-border\\"><img src=\\"http://localhost//viralfb/files/336_ad.png\\" alt=\\"\\" width=\\"336\\" height=\\"280\\" /></div>","wtitledisplay":"off","activeapps":"on","activehome":"off"},"widget2":{"wtitle":"Facebook Like","wcontent":"<div class=\\"sidebar-module-border\\">\\n<div class=\\"fb-page\\" data-href=\\"https://www.facebook.com/facebook\\" data-width=\\"336\\" data-small-header=\\"false\\" data-hide-cover=\\"false\\" data-show-facepile=\\"true\\">\\n<blockquote class=\\"fb-xfbml-parse-ignore\\" cite=\\"https://www.facebook.com/facebook\\"><a href=\\"https://www.facebook.com/facebook\\">Facebook</a></blockquote>\\n</div>\\n</div>","wtitledisplay":"off","activeapps":"on","activehome":"off"}},"above-login-share":{"widget3":{"wtitle":"Don\'t fotget to share text","wcontent":"<div style=\\"text-align: center;\\"><em class=\\"fa fa-share-alt\\">&nbsp;</em><em><span style=\\"font-family: book antiqua,palatino,serif;\\">&nbsp;Don\'t forget to share on Facebook</span></em></div>","wtitledisplay":"off","activeapps":"off","activehome":"on"}},"below-login-share":{},"before-apps-list":{"widget4":{"wtitle":"Try another app text","wcontent":"<div class=\\"new-apps-info\\">\\n<div class=\\"fa fa-gamepad\\">&nbsp;</div>\\n&nbsp;You can try another one of latest apps..</div>","wtitledisplay":"off","activeapps":"on","activehome":"off"},"widget5":{"wtitle":"App list text in home","wcontent":"<div class=\\"container apps-presentation\\">\\n<h4><em class=\\"fa fa-fire\\">&nbsp;</em> <strong><em> Hottest Apps are here <em class=\\"fa fa-level-down\\">&nbsp;</em> </em></strong></h4>\\n</div>","wtitledisplay":"off","activeapps":"off","activehome":"on"}},"above-footer":{},"footer":{"widget6":{"wtitle":"Footer copyright","wcontent":"<span>&copy; 2017 All rights reserverd</span>","wtitledisplay":"off","activeapps":"on","activehome":"on"},"widget7":{"wtitle":"Terms and conditions link","wcontent":"<br /><span><strong><a title=\\"Terms and Conditions\\" href=\\"http://yalayolo.me/pages/terms-and-conditions\\" target=\\"_blank\\" rel=\\"noopener noreferrer\\">Terms and Conditions</a></strong></span>","wtitledisplay":"off","activeapps":"on","activehome":"on"}}}',
            )

        );

        DB::table('configs')->insert($configs);

    }
}


class AppsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('apps')->delete();

        $apps = array(

            array(
                "id" => 1,
                "appname" => "how-will-look-your-life-over-5-years",
                "title" => "How will look your life over 5 years?",
                "description" => "Find out how will look your life over 5 years!",
                "img" => "images/appimages/1486352010.jpg",
                "results" => "[{\"result1\":{\"layers\":[[{\"idlayer\":\"added-fb1\",\"imgsrc\":\"\\/images\\/rsz_fb-profile.jpg\",\"top\":\"151\",\"left\":\"315\",\"width\":\"195\",\"height\":\"174\",\"disporder\":\"0\"}],[{\"idlayer\":\"added-image1\",\"imgsrc\":\"\\/images\\/results-uploaded\\/1486352082.png\",\"top\":\"0\",\"left\":\"0\",\"width\":\"850\",\"height\":\"446\",\"disporder\":\"1\"}],[{\"idlayer\":\"added-text1\",\"top\":\"365\",\"left\":\"136\",\"text\":\"\\u200c[first-name]'s life over 5 years\",\"font\":\"Chewy\",\"color\":\"rgb(255, 255, 255)\",\"size\":\"51\",\"angle\":\"0\",\"disporder\":\"2\"}]],\"gender\":\"male\"}},{\"result2\":{\"layers\":[[{\"idlayer\":\"added-fb1\",\"imgsrc\":\"\\/images\\/rsz_fb-profile.jpg\",\"top\":\"151\",\"left\":\"315\",\"width\":\"195\",\"height\":\"174\",\"disporder\":\"0\"}],[{\"idlayer\":\"added-image2\",\"imgsrc\":\"\\/images\\/results-uploaded\\/1486352196.png\",\"top\":\"0\",\"left\":\"0\",\"width\":\"850\",\"height\":\"446\",\"disporder\":\"1\"}],[{\"idlayer\":\"added-text1\",\"top\":\"365\",\"left\":\"136\",\"text\":\"\\u200c[first-name]'s life over 5 years\",\"font\":\"Chewy\",\"color\":\"rgb(255, 255, 255)\",\"size\":\"51\",\"angle\":\"0\",\"disporder\":\"2\"}]],\"gender\":\"male\"}},{\"result3\":{\"layers\":[[{\"idlayer\":\"added-fb1\",\"imgsrc\":\"\\/images\\/rsz_fb-profile.jpg\",\"top\":\"151\",\"left\":\"315\",\"width\":\"195\",\"height\":\"174\",\"disporder\":\"0\"}],[{\"idlayer\":\"added-image3\",\"imgsrc\":\"\\/images\\/results-uploaded\\/1486352218.png\",\"top\":\"0\",\"left\":\"0\",\"width\":\"850\",\"height\":\"446\",\"disporder\":\"1\"}],[{\"idlayer\":\"added-text1\",\"top\":\"365\",\"left\":\"136\",\"text\":\"\\u200c[first-name]'s life over 5 years\",\"font\":\"Chewy\",\"color\":\"rgb(255, 255, 255)\",\"size\":\"51\",\"angle\":\"0\",\"disporder\":\"2\"}]],\"gender\":\"male\"}},{\"result4\":{\"layers\":[[{\"idlayer\":\"added-fb1\",\"imgsrc\":\"\\/images\\/rsz_fb-profile.jpg\",\"top\":\"151\",\"left\":\"315\",\"width\":\"195\",\"height\":\"174\",\"disporder\":\"0\"}],[{\"idlayer\":\"added-image4\",\"imgsrc\":\"\\/images\\/results-uploaded\\/1486352235.png\",\"top\":\"0\",\"left\":\"0\",\"width\":\"850\",\"height\":\"446\",\"disporder\":\"1\"}],[{\"idlayer\":\"added-text1\",\"top\":\"365\",\"left\":\"136\",\"text\":\"\\u200c[first-name]'s life over 5 years\",\"font\":\"Chewy\",\"color\":\"rgb(255, 255, 255)\",\"size\":\"51\",\"angle\":\"0\",\"disporder\":\"2\"}]],\"gender\":\"male\"}},{\"result5\":{\"layers\":[[{\"idlayer\":\"added-fb1\",\"imgsrc\":\"\\/images\\/rsz_fb-profile.jpg\",\"top\":\"151\",\"left\":\"315\",\"width\":\"195\",\"height\":\"174\",\"disporder\":\"0\"}],[{\"idlayer\":\"added-image5\",\"imgsrc\":\"\\/images\\/results-uploaded\\/1486352250.png\",\"top\":\"0\",\"left\":\"0\",\"width\":\"850\",\"height\":\"446\",\"disporder\":\"1\"}],[{\"idlayer\":\"added-text1\",\"top\":\"365\",\"left\":\"136\",\"text\":\"\\u200c[first-name]'s life over 5 years\",\"font\":\"Chewy\",\"color\":\"rgb(255, 255, 255)\",\"size\":\"51\",\"angle\":\"0\",\"disporder\":\"2\"}]],\"gender\":\"male\"}},{\"result6\":{\"layers\":[[{\"idlayer\":\"added-fb1\",\"imgsrc\":\"\\/images\\/rsz_fb-profile.jpg\",\"top\":\"151\",\"left\":\"315\",\"width\":\"195\",\"height\":\"174\",\"disporder\":\"0\"}],[{\"idlayer\":\"added-image6\",\"imgsrc\":\"\\/images\\/results-uploaded\\/1486352272.png\",\"top\":\"0\",\"left\":\"0\",\"width\":\"850\",\"height\":\"446\",\"disporder\":\"1\"}],[{\"idlayer\":\"added-text1\",\"top\":\"365\",\"left\":\"136\",\"text\":\"\\u200c[first-name]'s life over 5 years\",\"font\":\"Chewy\",\"color\":\"rgb(255, 255, 255)\",\"size\":\"51\",\"angle\":\"0\",\"disporder\":\"2\"}]],\"gender\":\"female\"}},{\"result7\":{\"layers\":[[{\"idlayer\":\"added-fb1\",\"imgsrc\":\"\\/images\\/rsz_fb-profile.jpg\",\"top\":\"151\",\"left\":\"315\",\"width\":\"195\",\"height\":\"174\",\"disporder\":\"0\"}],[{\"idlayer\":\"added-image7\",\"imgsrc\":\"\\/images\\/results-uploaded\\/1486352294.png\",\"top\":\"0\",\"left\":\"0\",\"width\":\"850\",\"height\":\"446\",\"disporder\":\"1\"}],[{\"idlayer\":\"added-text1\",\"top\":\"365\",\"left\":\"136\",\"text\":\"\\u200c[first-name]'s life over 5 years\",\"font\":\"Chewy\",\"color\":\"rgb(255, 255, 255)\",\"size\":\"51\",\"angle\":\"0\",\"disporder\":\"2\"}]],\"gender\":\"female\"}},{\"result8\":{\"layers\":[[{\"idlayer\":\"added-fb1\",\"imgsrc\":\"\\/images\\/rsz_fb-profile.jpg\",\"top\":\"151\",\"left\":\"315\",\"width\":\"195\",\"height\":\"174\",\"disporder\":\"0\"}],[{\"idlayer\":\"added-image8\",\"imgsrc\":\"\\/images\\/results-uploaded\\/1486352309.png\",\"top\":\"0\",\"left\":\"0\",\"width\":\"850\",\"height\":\"446\",\"disporder\":\"1\"}],[{\"idlayer\":\"added-text1\",\"top\":\"365\",\"left\":\"136\",\"text\":\"\\u200c[first-name]'s life over 5 years\",\"font\":\"Chewy\",\"color\":\"rgb(255, 255, 255)\",\"size\":\"51\",\"angle\":\"0\",\"disporder\":\"2\"}]],\"gender\":\"female\"}},{\"result9\":{\"layers\":[[{\"idlayer\":\"added-fb1\",\"imgsrc\":\"\\/images\\/rsz_fb-profile.jpg\",\"top\":\"151\",\"left\":\"315\",\"width\":\"195\",\"height\":\"174\",\"disporder\":\"0\"}],[{\"idlayer\":\"added-image9\",\"imgsrc\":\"\\/images\\/results-uploaded\\/1486352323.png\",\"top\":\"0\",\"left\":\"0\",\"width\":\"850\",\"height\":\"446\",\"disporder\":\"1\"}],[{\"idlayer\":\"added-text1\",\"top\":\"365\",\"left\":\"136\",\"text\":\"\\u200c[first-name]'s life over 5 years\",\"font\":\"Chewy\",\"color\":\"rgb(255, 255, 255)\",\"size\":\"51\",\"angle\":\"0\",\"disporder\":\"2\"}]],\"gender\":\"female\"}},{\"result10\":{\"layers\":[[{\"idlayer\":\"added-fb1\",\"imgsrc\":\"\\/images\\/rsz_fb-profile.jpg\",\"top\":\"151\",\"left\":\"315\",\"width\":\"195\",\"height\":\"174\",\"disporder\":\"0\"}],[{\"idlayer\":\"added-image10\",\"imgsrc\":\"\\/images\\/results-uploaded\\/1486352338.png\",\"top\":\"0\",\"left\":\"0\",\"width\":\"850\",\"height\":\"446\",\"disporder\":\"1\"}],[{\"idlayer\":\"added-text1\",\"top\":\"365\",\"left\":\"136\",\"text\":\"\\u200c[first-name]'s life over 5 years\",\"font\":\"Chewy\",\"color\":\"rgb(255, 255, 255)\",\"size\":\"51\",\"angle\":\"0\",\"disporder\":\"2\"}]],\"gender\":\"female\"}},{\"result11\":{\"layers\":[[{\"idlayer\":\"added-fb1\",\"imgsrc\":\"\\/images\\/rsz_fb-profile.jpg\",\"top\":\"151\",\"left\":\"315\",\"width\":\"195\",\"height\":\"174\",\"disporder\":\"0\"}],[{\"idlayer\":\"added-image11\",\"imgsrc\":\"\\/images\\/results-uploaded\\/1486352349.png\",\"top\":\"0\",\"left\":\"0\",\"width\":\"850\",\"height\":\"446\",\"disporder\":\"1\"}],[{\"idlayer\":\"added-text1\",\"top\":\"365\",\"left\":\"136\",\"text\":\"\\u200c[first-name]'s life over 5 years\",\"font\":\"Chewy\",\"color\":\"rgb(255, 255, 255)\",\"size\":\"51\",\"angle\":\"0\",\"disporder\":\"2\"}]],\"gender\":\"female\"}}]",
                "appset" => "{\"fbtitle\":\"Find out how will look your life over 5 years!\",\"fbdescription\":\"[first-name] found out how will look his\\/her life over 5 years. Click on app and find out your result!\",\"fbimage\":\"generatedimage\",\"disp-media\":\"on\",\"mediatext\":\"[first-name] found out how will look his\\/her life over 5 years. Find out your result!\"}",
                "created_at" => date("Y-m-d") . " 00:00:01",
                "updated_at" => date("Y-m-d") . " 00:00:01"
            ),

            array(
                "id" => 2,
                "appname" => "when-will-you-find-your-true-love",
                "title" => "When will you find your true love?",
                "description" => "Find out when will you find your true love!",
                "img" => "images/appimages/1486366220.jpg",
				"results" => "[{\"result1\": {\"layers\": [[{\"idlayer\": \"added-fb1\",\"imgsrc\": \"\\/images\\/rsz_fb-profile.jpg\",\"top\": \"31\",\"left\": \"34\",\"width\": \"264\",\"height\": \"264\",\"disporder\": \"0\"}],[{\"idlayer\": \"added-image1\",\"imgsrc\": \"\\/images\\/results-uploaded\\/1486432561.png\",\"top\": \"0\",\"left\": \"0\",\"width\": \"850\",\"height\": \"446\",\"disporder\": \"1\"}],[{\"idlayer\": \"added-text1\",\"top\": \"281\",\"left\": \"255\",\"text\": \"[first-name], you will find your\",\"font\": \"AlfaSlabOne-Regular\",\"color\": \"rgb(0, 8, 48)\",\"size\": \"32\",\"angle\": \"0\",\"disporder\": \"2\"}],[{\"idlayer\": \"added-text2\",\"top\": \"347\",\"left\": \"254\",\"text\": \"true love in\",\"font\": \"AlfaSlabOne-Regular\",\"color\": \"rgb(0, 8, 48)\",\"size\": \"32\",\"angle\": \"0\",\"disporder\": \"3\"}],[{\"idlayer\": \"added-text3\",\"top\": \"320\",\"left\": \"468\",\"text\": \"3 months\",\"font\": \"Chewy\",\"color\": \"rgb(77, 0, 59)\",\"size\": \"64\",\"angle\": \"0\",\"disporder\": \"4\"}],[{\"idlayer\": \"added-image2\",\"imgsrc\": \"\\/images\\/results-uploaded\\/1486432794.png\",\"top\": \"335\",\"left\": \"706\",\"width\": \"85\",\"height\": \"67\",\"disporder\": \"5\"}]],\"gender\": \"both\"}}, {\"result2\": {\"layers\": [[{\"idlayer\": \"added-fb1\",\"imgsrc\": \"\\/images\\/rsz_fb-profile.jpg\",\"top\": \"31\",\"left\": \"34\",\"width\": \"264\",\"height\": \"264\",\"disporder\": \"0\"}],[{\"idlayer\": \"added-image1\",\"imgsrc\": \"\\/images\\/results-uploaded\\/1486432561.png\",\"top\": \"0\",\"left\": \"0\",\"width\": \"850\",\"height\": \"446\",\"disporder\": \"1\"}],[{\"idlayer\": \"added-text1\",\"top\": \"281\",\"left\": \"255\",\"text\": \"[first-name], you will find your\",\"font\": \"AlfaSlabOne-Regular\",\"color\": \"rgb(0, 8, 48)\",\"size\": \"32\",\"angle\": \"0\",\"disporder\": \"2\"}],[{\"idlayer\": \"added-text2\",\"top\": \"347\",\"left\": \"254\",\"text\": \"true love in\",\"font\": \"AlfaSlabOne-Regular\",\"color\": \"rgb(0, 8, 48)\",\"size\": \"32\",\"angle\": \"0\",\"disporder\": \"3\"}],[{\"idlayer\": \"added-text3\",\"top\": \"320\",\"left\": \"468\",\"text\": \"2 months\",\"font\": \"Chewy\",\"color\": \"rgb(77, 0, 59)\",\"size\": \"64\",\"angle\": \"0\",\"disporder\": \"4\"}],[{\"idlayer\": \"added-image2\",\"imgsrc\": \"\\/images\\/results-uploaded\\/1486432794.png\",\"top\": \"335\",\"left\": \"706\",\"width\": \"85\",\"height\": \"67\",\"disporder\": \"5\"}]],\"gender\": \"both\"}}, {\"result3\": {\"layers\": [[{\"idlayer\": \"added-fb1\",\"imgsrc\": \"\\/images\\/rsz_fb-profile.jpg\",\"top\": \"31\",\"left\": \"34\",\"width\": \"264\",\"height\": \"264\",\"disporder\": \"0\"}],[{\"idlayer\": \"added-image1\",\"imgsrc\": \"\\/images\\/results-uploaded\\/1486432561.png\",\"top\": \"0\",\"left\": \"0\",\"width\": \"850\",\"height\": \"446\",\"disporder\": \"1\"}],[{\"idlayer\": \"added-text1\",\"top\": \"281\",\"left\": \"255\",\"text\": \"[first-name], you will find your\",\"font\": \"AlfaSlabOne-Regular\",\"color\": \"rgb(0, 8, 48)\",\"size\": \"32\",\"angle\": \"0\",\"disporder\": \"2\"}],[{\"idlayer\": \"added-text2\",\"top\": \"347\",\"left\": \"254\",\"text\": \"true love in\",\"font\": \"AlfaSlabOne-Regular\",\"color\": \"rgb(0, 8, 48)\",\"size\": \"32\",\"angle\": \"0\",\"disporder\": \"3\"}],[{\"idlayer\": \"added-text3\",\"top\": \"320\",\"left\": \"468\",\"text\": \"4 months\",\"font\": \"Chewy\",\"color\": \"rgb(77, 0, 59)\",\"size\": \"64\",\"angle\": \"0\",\"disporder\": \"4\"}],[{\"idlayer\": \"added-image2\",\"imgsrc\": \"\\/images\\/results-uploaded\\/1486432794.png\",\"top\": \"335\",\"left\": \"706\",\"width\": \"85\",\"height\": \"67\",\"disporder\": \"5\"}]],\"gender\": \"both\"}}, {\"result4\": {\"layers\": [[{\"idlayer\": \"added-fb1\",\"imgsrc\": \"\\/images\\/rsz_fb-profile.jpg\",\"top\": \"31\",\"left\": \"34\",\"width\": \"264\",\"height\": \"264\",\"disporder\": \"0\"}],[{\"idlayer\": \"added-image1\",\"imgsrc\": \"\\/images\\/results-uploaded\\/1486432561.png\",\"top\": \"0\",\"left\": \"0\",\"width\": \"850\",\"height\": \"446\",\"disporder\": \"1\"}],[{\"idlayer\": \"added-text1\",\"top\": \"281\",\"left\": \"255\",\"text\": \"[first-name], you will find your\",\"font\": \"AlfaSlabOne-Regular\",\"color\": \"rgb(0, 8, 48)\",\"size\": \"32\",\"angle\": \"0\",\"disporder\": \"2\"}],[{\"idlayer\": \"added-text2\",\"top\": \"347\",\"left\": \"254\",\"text\": \"true love in\",\"font\": \"AlfaSlabOne-Regular\",\"color\": \"rgb(0, 8, 48)\",\"size\": \"32\",\"angle\": \"0\",\"disporder\": \"3\"}],[{\"idlayer\": \"added-text3\",\"top\": \"320\",\"left\": \"468\",\"text\": \"5 months\",\"font\": \"Chewy\",\"color\": \"rgb(77, 0, 59)\",\"size\": \"64\",\"angle\": \"0\",\"disporder\": \"4\"}],[{\"idlayer\": \"added-image2\",\"imgsrc\": \"\\/images\\/results-uploaded\\/1486432794.png\",\"top\": \"335\",\"left\": \"706\",\"width\": \"85\",\"height\": \"67\",\"disporder\": \"5\"}]],\"gender\": \"both\"}}, {\"result5\": {\"layers\": [[{\"idlayer\": \"added-fb1\",\"imgsrc\": \"\\/images\\/rsz_fb-profile.jpg\",\"top\": \"31\",\"left\": \"34\",\"width\": \"264\",\"height\": \"264\",\"disporder\": \"0\"}],[{\"idlayer\": \"added-image1\",\"imgsrc\": \"\\/images\\/results-uploaded\\/1486432561.png\",\"top\": \"0\",\"left\": \"0\",\"width\": \"850\",\"height\": \"446\",\"disporder\": \"1\"}],[{\"idlayer\": \"added-text1\",\"top\": \"281\",\"left\": \"255\",\"text\": \"[first-name], you will find your\",\"font\": \"AlfaSlabOne-Regular\",\"color\": \"rgb(0, 8, 48)\",\"size\": \"32\",\"angle\": \"0\",\"disporder\": \"2\"}],[{\"idlayer\": \"added-text2\",\"top\": \"347\",\"left\": \"254\",\"text\": \"true love in\",\"font\": \"AlfaSlabOne-Regular\",\"color\": \"rgb(0, 8, 48)\",\"size\": \"32\",\"angle\": \"0\",\"disporder\": \"3\"}],[{\"idlayer\": \"added-text3\",\"top\": \"320\",\"left\": \"484\",\"text\": \"1 month\",\"font\": \"Chewy\",\"color\": \"rgb(77, 0, 59)\",\"size\": \"64\",\"angle\": \"0\",\"disporder\": \"4\"}],[{\"idlayer\": \"added-image2\",\"imgsrc\": \"\\/images\\/results-uploaded\\/1486432794.png\",\"top\": \"335\",\"left\": \"706\",\"width\": \"85\",\"height\": \"67\",\"disporder\": \"5\"}]],\"gender\": \"both\"}}, {\"result6\": {\"layers\": [[{\"idlayer\": \"added-fb1\",\"imgsrc\": \"\\/images\\/rsz_fb-profile.jpg\",\"top\": \"31\",\"left\": \"34\",\"width\": \"264\",\"height\": \"264\",\"disporder\": \"0\"}],[{\"idlayer\": \"added-image1\",\"imgsrc\": \"\\/images\\/results-uploaded\\/1486432561.png\",\"top\": \"0\",\"left\": \"0\",\"width\": \"850\",\"height\": \"446\",\"disporder\": \"1\"}],[{\"idlayer\": \"added-text1\",\"top\": \"281\",\"left\": \"255\",\"text\": \"[first-name], you will find your\",\"font\": \"AlfaSlabOne-Regular\",\"color\": \"rgb(0, 8, 48)\",\"size\": \"32\",\"angle\": \"0\",\"disporder\": \"2\"}],[{\"idlayer\": \"added-text2\",\"top\": \"347\",\"left\": \"254\",\"text\": \"true love in\",\"font\": \"AlfaSlabOne-Regular\",\"color\": \"rgb(0, 8, 48)\",\"size\": \"32\",\"angle\": \"0\",\"disporder\": \"3\"}],[{\"idlayer\": \"added-text3\",\"top\": \"320\",\"left\": \"484\",\"text\": \"15 days\",\"font\": \"Chewy\",\"color\": \"rgb(77, 0, 59)\",\"size\": \"64\",\"angle\": \"0\",\"disporder\": \"4\"}],[{\"idlayer\": \"added-image2\",\"imgsrc\": \"\\/images\\/results-uploaded\\/1486432794.png\",\"top\": \"335\",\"left\": \"706\",\"width\": \"85\",\"height\": \"67\",\"disporder\": \"5\"}]],\"gender\": \"both\"}}, {\"result7\": {\"layers\": [[{\"idlayer\": \"added-fb1\",\"imgsrc\": \"\\/images\\/rsz_fb-profile.jpg\",\"top\": \"31\",\"left\": \"34\",\"width\": \"264\",\"height\": \"264\",\"disporder\": \"0\"}],[{\"idlayer\": \"added-image1\",\"imgsrc\": \"\\/images\\/results-uploaded\\/1486432561.png\",\"top\": \"0\",\"left\": \"0\",\"width\": \"850\",\"height\": \"446\",\"disporder\": \"1\"}],[{\"idlayer\": \"added-text1\",\"top\": \"281\",\"left\": \"255\",\"text\": \"[first-name], you will find your\",\"font\": \"AlfaSlabOne-Regular\",\"color\": \"rgb(0, 8, 48)\",\"size\": \"32\",\"angle\": \"0\",\"disporder\": \"2\"}],[{\"idlayer\": \"added-text2\",\"top\": \"347\",\"left\": \"254\",\"text\": \"true love in\",\"font\": \"AlfaSlabOne-Regular\",\"color\": \"rgb(0, 8, 48)\",\"size\": \"32\",\"angle\": \"0\",\"disporder\": \"3\"}],[{\"idlayer\": \"added-text3\",\"top\": \"320\",\"left\": \"477\",\"text\": \"20 days\",\"font\": \"Chewy\",\"color\": \"rgb(77, 0, 59)\",\"size\": \"64\",\"angle\": \"0\",\"disporder\": \"4\"}],[{\"idlayer\": \"added-image2\",\"imgsrc\": \"\\/images\\/results-uploaded\\/1486432794.png\",\"top\": \"335\",\"left\": \"706\",\"width\": \"85\",\"height\": \"67\",\"disporder\": \"5\"}]],\"gender\": \"both\"}}, {\"result8\": {\"layers\": [[{\"idlayer\": \"added-fb1\",\"imgsrc\": \"\\/images\\/rsz_fb-profile.jpg\",\"top\": \"31\",\"left\": \"34\",\"width\": \"264\",\"height\": \"264\",\"disporder\": \"0\"}],[{\"idlayer\": \"added-image1\",\"imgsrc\": \"\\/images\\/results-uploaded\\/1486432561.png\",\"top\": \"0\",\"left\": \"0\",\"width\": \"850\",\"height\": \"446\",\"disporder\": \"1\"}],[{\"idlayer\": \"added-text1\",\"top\": \"281\",\"left\": \"255\",\"text\": \"[first-name], you will find your\",\"font\": \"AlfaSlabOne-Regular\",\"color\": \"rgb(0, 8, 48)\",\"size\": \"32\",\"angle\": \"0\",\"disporder\": \"2\"}],[{\"idlayer\": \"added-text2\",\"top\": \"347\",\"left\": \"254\",\"text\": \"true love in\",\"font\": \"AlfaSlabOne-Regular\",\"color\": \"rgb(0, 8, 48)\",\"size\": \"32\",\"angle\": \"0\",\"disporder\": \"3\"}],[{\"idlayer\": \"added-text3\",\"top\": \"320\",\"left\": \"477\",\"text\": \"25 days\",\"font\": \"Chewy\",\"color\": \"rgb(77, 0, 59)\",\"size\": \"64\",\"angle\": \"0\",\"disporder\": \"4\"}],[{\"idlayer\": \"added-image2\",\"imgsrc\": \"\\/images\\/results-uploaded\\/1486432794.png\",\"top\": \"335\",\"left\": \"706\",\"width\": \"85\",\"height\": \"67\",\"disporder\": \"5\"}]],\"gender\": \"both\"}}, {\"result9\": {\"layers\": [[{\"idlayer\": \"added-fb1\",\"imgsrc\": \"\\/images\\/rsz_fb-profile.jpg\",\"top\": \"31\",\"left\": \"34\",\"width\": \"264\",\"height\": \"264\",\"disporder\": \"0\"}],[{\"idlayer\": \"added-image1\",\"imgsrc\": \"\\/images\\/results-uploaded\\/1486432561.png\",\"top\": \"0\",\"left\": \"0\",\"width\": \"850\",\"height\": \"446\",\"disporder\": \"1\"}],[{\"idlayer\": \"added-text1\",\"top\": \"281\",\"left\": \"255\",\"text\": \"[first-name], you will find your\",\"font\": \"AlfaSlabOne-Regular\",\"color\": \"rgb(0, 8, 48)\",\"size\": \"32\",\"angle\": \"0\",\"disporder\": \"2\"}],[{\"idlayer\": \"added-text2\",\"top\": \"347\",\"left\": \"254\",\"text\": \"true love in\",\"font\": \"AlfaSlabOne-Regular\",\"color\": \"rgb(0, 8, 48)\",\"size\": \"32\",\"angle\": \"0\",\"disporder\": \"3\"}],[{\"idlayer\": \"added-text3\",\"top\": \"320\",\"left\": \"477\",\"text\": \"10 days\",\"font\": \"Chewy\",\"color\": \"rgb(77, 0, 59)\",\"size\": \"64\",\"angle\": \"0\",\"disporder\": \"4\"}],[{\"idlayer\": \"added-image2\",\"imgsrc\": \"\\/images\\/results-uploaded\\/1486432794.png\",\"top\": \"335\",\"left\": \"706\",\"width\": \"85\",\"height\": \"67\",\"disporder\": \"5\"}]],\"gender\": \"both\"}}, {\"result10\": {\"layers\": [[{\"idlayer\": \"added-fb1\",\"imgsrc\": \"\\/images\\/rsz_fb-profile.jpg\",\"top\": \"31\",\"left\": \"34\",\"width\": \"264\",\"height\": \"264\",\"disporder\": \"0\"}],[{\"idlayer\": \"added-image1\",\"imgsrc\": \"\\/images\\/results-uploaded\\/1486432561.png\",\"top\": \"0\",\"left\": \"0\",\"width\": \"850\",\"height\": \"446\",\"disporder\": \"1\"}],[{\"idlayer\": \"added-text1\",\"top\": \"281\",\"left\": \"255\",\"text\": \"[first-name], you will find your\",\"font\": \"AlfaSlabOne-Regular\",\"color\": \"rgb(0, 8, 48)\",\"size\": \"32\",\"angle\": \"0\",\"disporder\": \"2\"}],[{\"idlayer\": \"added-text2\",\"top\": \"347\",\"left\": \"254\",\"text\": \"true love in\",\"font\": \"AlfaSlabOne-Regular\",\"color\": \"rgb(0, 8, 48)\",\"size\": \"32\",\"angle\": \"0\",\"disporder\": \"3\"}],[{\"idlayer\": \"added-text3\",\"top\": \"320\",\"left\": \"468\",\"text\": \"6 months\",\"font\": \"Chewy\",\"color\": \"rgb(77, 0, 59)\",\"size\": \"64\",\"angle\": \"0\",\"disporder\": \"4\"}],[{\"idlayer\": \"added-image2\",\"imgsrc\": \"\\/images\\/results-uploaded\\/1486432794.png\",\"top\": \"335\",\"left\": \"706\",\"width\": \"85\",\"height\": \"67\",\"disporder\": \"5\"}]],\"gender\": \"both\"}}]",
                "appset" => "{\"fbtitle\":\"Find out when you will find your true love!\",\"fbdescription\":\"[first-name] found out when he\\/she will find his\\/her true love. Click on app and find out your result!\",\"fbimage\":\"generatedimage\",\"disp-media\":\"on\",\"mediatext\":\"[first-name] found out when he\\/she will find his\\/her true love. Find out your result!\"}",
                "created_at" => date("Y-m-d") . " 00:00:02",
                "updated_at" => date("Y-m-d") . " 00:00:02"
            ),

            array(
                "id" => 3,
                "appname" => "how-looks-the-ideal-person-for-you",
                "title" => "How looks the ideal person for you?",
                "description" => "Find out how looks the ideal person for you!",
                "img" => "images/appimages/1486442913.jpg",
                "results" => "[{\"result1\":{\"layers\":[[{\"idlayer\":\"added-fb1\",\"imgsrc\":\"\\/images\\/rsz_fb-profile.jpg\",\"top\":\"94\",\"left\":\"76\",\"width\":\"324\",\"height\":\"322\",\"disporder\":\"0\"}],[{\"idlayer\":\"added-image1\",\"imgsrc\":\"\\/images\\/results-uploaded\\/1486442970.png\",\"top\":\"0\",\"left\":\"0\",\"width\":\"850\",\"height\":\"446\",\"disporder\":\"1\"}],[{\"idlayer\":\"added-text1\",\"top\":\"0\",\"left\":\"127\",\"text\":\"The ideal person for [first-name]\",\"font\":\"Pacifico\",\"color\":\"rgb(0, 0, 0)\",\"size\":\"51\",\"angle\":\"0\",\"disporder\":\"2\"}]],\"gender\":\"male\"}},{\"result2\":{\"layers\":[[{\"idlayer\":\"added-fb1\",\"imgsrc\":\"\\/images\\/rsz_fb-profile.jpg\",\"top\":\"94\",\"left\":\"76\",\"width\":\"324\",\"height\":\"322\",\"disporder\":\"0\"}],[{\"idlayer\":\"added-image2\",\"imgsrc\":\"\\/images\\/results-uploaded\\/1486443144.png\",\"top\":\"0\",\"left\":\"0\",\"width\":\"850\",\"height\":\"446\",\"disporder\":\"1\"}],[{\"idlayer\":\"added-text1\",\"top\":\"0\",\"left\":\"127\",\"text\":\"The ideal person for [first-name]\",\"font\":\"Pacifico\",\"color\":\"rgb(0, 0, 0)\",\"size\":\"51\",\"angle\":\"0\",\"disporder\":\"2\"}]],\"gender\":\"male\"}},{\"result3\":{\"layers\":[[{\"idlayer\":\"added-fb1\",\"imgsrc\":\"\\/images\\/rsz_fb-profile.jpg\",\"top\":\"94\",\"left\":\"76\",\"width\":\"324\",\"height\":\"322\",\"disporder\":\"0\"}],[{\"idlayer\":\"added-image3\",\"imgsrc\":\"\\/images\\/results-uploaded\\/1486443157.png\",\"top\":\"0\",\"left\":\"0\",\"width\":\"850\",\"height\":\"446\",\"disporder\":\"1\"}],[{\"idlayer\":\"added-text1\",\"top\":\"0\",\"left\":\"127\",\"text\":\"The ideal person for [first-name]\",\"font\":\"Pacifico\",\"color\":\"rgb(0, 0, 0)\",\"size\":\"51\",\"angle\":\"0\",\"disporder\":\"2\"}]],\"gender\":\"male\"}},{\"result4\":{\"layers\":[[{\"idlayer\":\"added-fb1\",\"imgsrc\":\"\\/images\\/rsz_fb-profile.jpg\",\"top\":\"94\",\"left\":\"76\",\"width\":\"324\",\"height\":\"322\",\"disporder\":\"0\"}],[{\"idlayer\":\"added-image4\",\"imgsrc\":\"\\/images\\/results-uploaded\\/1486443170.png\",\"top\":\"0\",\"left\":\"0\",\"width\":\"850\",\"height\":\"446\",\"disporder\":\"1\"}],[{\"idlayer\":\"added-text1\",\"top\":\"0\",\"left\":\"127\",\"text\":\"The ideal person for [first-name]\",\"font\":\"Pacifico\",\"color\":\"rgb(0, 0, 0)\",\"size\":\"51\",\"angle\":\"0\",\"disporder\":\"2\"}]],\"gender\":\"male\"}},{\"result5\":{\"layers\":[[{\"idlayer\":\"added-fb1\",\"imgsrc\":\"\\/images\\/rsz_fb-profile.jpg\",\"top\":\"94\",\"left\":\"76\",\"width\":\"324\",\"height\":\"322\",\"disporder\":\"0\"}],[{\"idlayer\":\"added-image5\",\"imgsrc\":\"\\/images\\/results-uploaded\\/1486443186.png\",\"top\":\"0\",\"left\":\"0\",\"width\":\"850\",\"height\":\"446\",\"disporder\":\"1\"}],[{\"idlayer\":\"added-text1\",\"top\":\"0\",\"left\":\"127\",\"text\":\"The ideal person for [first-name]\",\"font\":\"Pacifico\",\"color\":\"rgb(0, 0, 0)\",\"size\":\"51\",\"angle\":\"0\",\"disporder\":\"2\"}]],\"gender\":\"male\"}},{\"result6\":{\"layers\":[[{\"idlayer\":\"added-fb1\",\"imgsrc\":\"\\/images\\/rsz_fb-profile.jpg\",\"top\":\"94\",\"left\":\"76\",\"width\":\"324\",\"height\":\"322\",\"disporder\":\"0\"}],[{\"idlayer\":\"added-image6\",\"imgsrc\":\"\\/images\\/results-uploaded\\/1486443200.png\",\"top\":\"0\",\"left\":\"0\",\"width\":\"850\",\"height\":\"446\",\"disporder\":\"1\"}],[{\"idlayer\":\"added-text1\",\"top\":\"0\",\"left\":\"127\",\"text\":\"The ideal person for [first-name]\",\"font\":\"Pacifico\",\"color\":\"rgb(0, 0, 0)\",\"size\":\"51\",\"angle\":\"0\",\"disporder\":\"2\"}]],\"gender\":\"male\"}},{\"result7\":{\"layers\":[[{\"idlayer\":\"added-fb1\",\"imgsrc\":\"\\/images\\/rsz_fb-profile.jpg\",\"top\":\"94\",\"left\":\"76\",\"width\":\"324\",\"height\":\"322\",\"disporder\":\"0\"}],[{\"idlayer\":\"added-image7\",\"imgsrc\":\"\\/images\\/results-uploaded\\/1486443211.png\",\"top\":\"0\",\"left\":\"0\",\"width\":\"850\",\"height\":\"446\",\"disporder\":\"1\"}],[{\"idlayer\":\"added-text1\",\"top\":\"0\",\"left\":\"127\",\"text\":\"The ideal person for [first-name]\",\"font\":\"Pacifico\",\"color\":\"rgb(0, 0, 0)\",\"size\":\"51\",\"angle\":\"0\",\"disporder\":\"2\"}]],\"gender\":\"male\"}},{\"result8\":{\"layers\":[[{\"idlayer\":\"added-fb1\",\"imgsrc\":\"\\/images\\/rsz_fb-profile.jpg\",\"top\":\"94\",\"left\":\"76\",\"width\":\"324\",\"height\":\"322\",\"disporder\":\"0\"}],[{\"idlayer\":\"added-image8\",\"imgsrc\":\"\\/images\\/results-uploaded\\/1486443223.png\",\"top\":\"0\",\"left\":\"0\",\"width\":\"850\",\"height\":\"446\",\"disporder\":\"1\"}],[{\"idlayer\":\"added-text1\",\"top\":\"0\",\"left\":\"127\",\"text\":\"The ideal person for [first-name]\",\"font\":\"Pacifico\",\"color\":\"rgb(0, 0, 0)\",\"size\":\"51\",\"angle\":\"0\",\"disporder\":\"2\"}]],\"gender\":\"male\"}},{\"result9\":{\"layers\":[[{\"idlayer\":\"added-fb1\",\"imgsrc\":\"\\/images\\/rsz_fb-profile.jpg\",\"top\":\"94\",\"left\":\"76\",\"width\":\"324\",\"height\":\"322\",\"disporder\":\"0\"}],[{\"idlayer\":\"added-image9\",\"imgsrc\":\"\\/images\\/results-uploaded\\/1486443235.png\",\"top\":\"0\",\"left\":\"0\",\"width\":\"850\",\"height\":\"446\",\"disporder\":\"1\"}],[{\"idlayer\":\"added-text1\",\"top\":\"0\",\"left\":\"127\",\"text\":\"The ideal person for [first-name]\",\"font\":\"Pacifico\",\"color\":\"rgb(0, 0, 0)\",\"size\":\"51\",\"angle\":\"0\",\"disporder\":\"2\"}]],\"gender\":\"male\"}},{\"result10\":{\"layers\":[[{\"idlayer\":\"added-fb1\",\"imgsrc\":\"\\/images\\/rsz_fb-profile.jpg\",\"top\":\"94\",\"left\":\"76\",\"width\":\"324\",\"height\":\"322\",\"disporder\":\"0\"}],[{\"idlayer\":\"added-image10\",\"imgsrc\":\"\\/images\\/results-uploaded\\/1486443264.png\",\"top\":\"0\",\"left\":\"0\",\"width\":\"850\",\"height\":\"446\",\"disporder\":\"1\"}],[{\"idlayer\":\"added-text1\",\"top\":\"0\",\"left\":\"127\",\"text\":\"The ideal person for [first-name]\",\"font\":\"Pacifico\",\"color\":\"rgb(0, 0, 0)\",\"size\":\"51\",\"angle\":\"0\",\"disporder\":\"2\"}]],\"gender\":\"female\"}},{\"result11\":{\"layers\":[[{\"idlayer\":\"added-fb1\",\"imgsrc\":\"\\/images\\/rsz_fb-profile.jpg\",\"top\":\"94\",\"left\":\"76\",\"width\":\"324\",\"height\":\"322\",\"disporder\":\"0\"}],[{\"idlayer\":\"added-image11\",\"imgsrc\":\"\\/images\\/results-uploaded\\/1486443277.png\",\"top\":\"0\",\"left\":\"0\",\"width\":\"850\",\"height\":\"446\",\"disporder\":\"1\"}],[{\"idlayer\":\"added-text1\",\"top\":\"0\",\"left\":\"127\",\"text\":\"The ideal person for [first-name]\",\"font\":\"Pacifico\",\"color\":\"rgb(0, 0, 0)\",\"size\":\"51\",\"angle\":\"0\",\"disporder\":\"2\"}]],\"gender\":\"female\"}},{\"result12\":{\"layers\":[[{\"idlayer\":\"added-fb1\",\"imgsrc\":\"\\/images\\/rsz_fb-profile.jpg\",\"top\":\"94\",\"left\":\"76\",\"width\":\"324\",\"height\":\"322\",\"disporder\":\"0\"}],[{\"idlayer\":\"added-image12\",\"imgsrc\":\"\\/images\\/results-uploaded\\/1486443289.png\",\"top\":\"0\",\"left\":\"0\",\"width\":\"850\",\"height\":\"446\",\"disporder\":\"1\"}],[{\"idlayer\":\"added-text1\",\"top\":\"0\",\"left\":\"127\",\"text\":\"The ideal person for [first-name]\",\"font\":\"Pacifico\",\"color\":\"rgb(0, 0, 0)\",\"size\":\"51\",\"angle\":\"0\",\"disporder\":\"2\"}]],\"gender\":\"female\"}},{\"result13\":{\"layers\":[[{\"idlayer\":\"added-fb1\",\"imgsrc\":\"\\/images\\/rsz_fb-profile.jpg\",\"top\":\"94\",\"left\":\"76\",\"width\":\"324\",\"height\":\"322\",\"disporder\":\"0\"}],[{\"idlayer\":\"added-image13\",\"imgsrc\":\"\\/images\\/results-uploaded\\/1486443301.png\",\"top\":\"0\",\"left\":\"0\",\"width\":\"850\",\"height\":\"446\",\"disporder\":\"1\"}],[{\"idlayer\":\"added-text1\",\"top\":\"0\",\"left\":\"127\",\"text\":\"The ideal person for [first-name]\",\"font\":\"Pacifico\",\"color\":\"rgb(0, 0, 0)\",\"size\":\"51\",\"angle\":\"0\",\"disporder\":\"2\"}]],\"gender\":\"female\"}},{\"result14\":{\"layers\":[[{\"idlayer\":\"added-fb1\",\"imgsrc\":\"\\/images\\/rsz_fb-profile.jpg\",\"top\":\"94\",\"left\":\"76\",\"width\":\"324\",\"height\":\"322\",\"disporder\":\"0\"}],[{\"idlayer\":\"added-image14\",\"imgsrc\":\"\\/images\\/results-uploaded\\/1486443317.png\",\"top\":\"0\",\"left\":\"0\",\"width\":\"850\",\"height\":\"446\",\"disporder\":\"1\"}],[{\"idlayer\":\"added-text1\",\"top\":\"0\",\"left\":\"127\",\"text\":\"The ideal person for [first-name]\",\"font\":\"Pacifico\",\"color\":\"rgb(0, 0, 0)\",\"size\":\"51\",\"angle\":\"0\",\"disporder\":\"2\"}]],\"gender\":\"female\"}},{\"result15\":{\"layers\":[[{\"idlayer\":\"added-fb1\",\"imgsrc\":\"\\/images\\/rsz_fb-profile.jpg\",\"top\":\"94\",\"left\":\"76\",\"width\":\"324\",\"height\":\"322\",\"disporder\":\"0\"}],[{\"idlayer\":\"added-image15\",\"imgsrc\":\"\\/images\\/results-uploaded\\/1486443327.png\",\"top\":\"0\",\"left\":\"0\",\"width\":\"850\",\"height\":\"446\",\"disporder\":\"1\"}],[{\"idlayer\":\"added-text1\",\"top\":\"0\",\"left\":\"127\",\"text\":\"The ideal person for [first-name]\",\"font\":\"Pacifico\",\"color\":\"rgb(0, 0, 0)\",\"size\":\"51\",\"angle\":\"0\",\"disporder\":\"2\"}]],\"gender\":\"female\"}},{\"result16\":{\"layers\":[[{\"idlayer\":\"added-fb1\",\"imgsrc\":\"\\/images\\/rsz_fb-profile.jpg\",\"top\":\"94\",\"left\":\"76\",\"width\":\"324\",\"height\":\"322\",\"disporder\":\"0\"}],[{\"idlayer\":\"added-image16\",\"imgsrc\":\"\\/images\\/results-uploaded\\/1486443339.png\",\"top\":\"0\",\"left\":\"0\",\"width\":\"850\",\"height\":\"446\",\"disporder\":\"1\"}],[{\"idlayer\":\"added-text1\",\"top\":\"0\",\"left\":\"127\",\"text\":\"The ideal person for [first-name]\",\"font\":\"Pacifico\",\"color\":\"rgb(0, 0, 0)\",\"size\":\"51\",\"angle\":\"0\",\"disporder\":\"2\"}]],\"gender\":\"female\"}},{\"result17\":{\"layers\":[[{\"idlayer\":\"added-fb1\",\"imgsrc\":\"\\/images\\/rsz_fb-profile.jpg\",\"top\":\"94\",\"left\":\"76\",\"width\":\"324\",\"height\":\"322\",\"disporder\":\"0\"}],[{\"idlayer\":\"added-image17\",\"imgsrc\":\"\\/images\\/results-uploaded\\/1486443351.png\",\"top\":\"0\",\"left\":\"0\",\"width\":\"850\",\"height\":\"446\",\"disporder\":\"1\"}],[{\"idlayer\":\"added-text1\",\"top\":\"0\",\"left\":\"127\",\"text\":\"The ideal person for [first-name]\",\"font\":\"Pacifico\",\"color\":\"rgb(0, 0, 0)\",\"size\":\"51\",\"angle\":\"0\",\"disporder\":\"2\"}]],\"gender\":\"female\"}},{\"result18\":{\"layers\":[[{\"idlayer\":\"added-fb1\",\"imgsrc\":\"\\/images\\/rsz_fb-profile.jpg\",\"top\":\"94\",\"left\":\"76\",\"width\":\"324\",\"height\":\"322\",\"disporder\":\"0\"}],[{\"idlayer\":\"added-image18\",\"imgsrc\":\"\\/images\\/results-uploaded\\/1486443363.png\",\"top\":\"0\",\"left\":\"0\",\"width\":\"850\",\"height\":\"446\",\"disporder\":\"1\"}],[{\"idlayer\":\"added-text1\",\"top\":\"0\",\"left\":\"127\",\"text\":\"The ideal person for [first-name]\",\"font\":\"Pacifico\",\"color\":\"rgb(0, 0, 0)\",\"size\":\"51\",\"angle\":\"0\",\"disporder\":\"2\"}]],\"gender\":\"female\"}}]",
                "appset" => "{\"fbtitle\":\"Find out how looks the ideal person for you!\",\"fbdescription\":\"[first-name] found out how looks the ideal person for he\\/she. Click on app and find out your result!\",\"fbimage\":\"generatedimage\",\"disp-media\":\"on\",\"mediatext\":\"[first-name] found out how looks the ideal person for he\\/she. Find out your result!\"}",
                "created_at" => date("Y-m-d") . " 00:00:03",
                "updated_at" => date("Y-m-d") . " 00:00:03"
            ),

            array(
                "id" => 4,
                "appname" => "what-car-best-represents-you",
                "title" => "What car best represents you?",
                "description" => "Find out what car best represents you!",
                "img" => "images/appimages/1486444569.jpg",
                "results" => "[{\"result1\":{\"layers\":[[{\"idlayer\":\"added-fb1\",\"imgsrc\":\"\\/images\\/rsz_fb-profile.jpg\",\"top\":\"31\",\"left\":\"34\",\"width\":\"238\",\"height\":\"237\",\"disporder\":\"0\"}],[{\"idlayer\":\"pixlr1\",\"imgsrc\":\"\\/images\\/pixlr-images\\/1486444835.png\",\"top\":\"0\",\"left\":\"0\",\"width\":\"850\",\"height\":\"446\",\"disporder\":\"1\"}],[{\"idlayer\":\"added-text1\",\"top\":\"356\",\"left\":\"76\",\"text\":\"     [first-name] is best represented by a BMW car\",\"font\":\"Chewy\",\"color\":\"rgb(94, 0, 0)\",\"size\":\"38\",\"angle\":\"0\",\"disporder\":\"2\"}]],\"gender\":\"both\"}},{\"result2\":{\"layers\":[[{\"idlayer\":\"added-fb1\",\"imgsrc\":\"\\/images\\/rsz_fb-profile.jpg\",\"top\":\"0\",\"left\":\"570\",\"width\":\"238\",\"height\":\"236\",\"disporder\":\"0\"}],[{\"idlayer\":\"pixlr2\",\"imgsrc\":\"\\/images\\/pixlr-images\\/1486445272.png\",\"top\":\"0\",\"left\":\"0\",\"width\":\"850\",\"height\":\"446\",\"disporder\":\"1\"}],[{\"idlayer\":\"added-text1\",\"top\":\"356\",\"left\":\"68\",\"text\":\"     [first-name] is best represented by an Audi car\",\"font\":\"Chewy\",\"color\":\"rgb(0, 30, 45)\",\"size\":\"38\",\"angle\":\"0\",\"disporder\":\"2\"}]],\"gender\":\"both\"}},{\"result3\":{\"layers\":[[{\"idlayer\":\"added-fb1\",\"imgsrc\":\"\\/images\\/rsz_fb-profile.jpg\",\"top\":\"49\",\"left\":\"42\",\"width\":\"238\",\"height\":\"237\",\"disporder\":\"0\"}],[{\"idlayer\":\"pixlr1\",\"imgsrc\":\"\\/images\\/pixlr-images\\/1486445779.png\",\"top\":\"0\",\"left\":\"0\",\"width\":\"850\",\"height\":\"446\",\"disporder\":\"1\"}],[{\"idlayer\":\"added-text1\",\"top\":\"361\",\"left\":\"102\",\"text\":\"     [first-name] is best represented by a Mercedes car\",\"font\":\"Chewy\",\"color\":\"rgb(17, 32, 0)\",\"size\":\"32\",\"angle\":\"0\",\"disporder\":\"2\"}]],\"gender\":\"both\"}},{\"result4\":{\"layers\":[[{\"idlayer\":\"added-fb1\",\"imgsrc\":\"\\/images\\/rsz_fb-profile.jpg\",\"top\":\"0\",\"left\":\"0\",\"width\":\"238\",\"height\":\"236\",\"disporder\":\"0\"}],[{\"idlayer\":\"pixlr1\",\"imgsrc\":\"\\/images\\/pixlr-images\\/1486446470.png\",\"top\":\"0\",\"left\":\"0\",\"width\":\"850\",\"height\":\"446\",\"disporder\":\"1\"}],[{\"idlayer\":\"added-text1\",\"top\":\"356\",\"left\":\"51\",\"text\":\"     [first-name] is best represented by a Porsche car\",\"font\":\"Chewy\",\"color\":\"rgb(11, 0, 32)\",\"size\":\"38\",\"angle\":\"0\",\"disporder\":\"2\"}]],\"gender\":\"both\"}},{\"result5\":{\"layers\":[[{\"idlayer\":\"added-fb1\",\"imgsrc\":\"\\/images\\/rsz_fb-profile.jpg\",\"top\":\"31\",\"left\":\"34\",\"width\":\"238\",\"height\":\"237\",\"disporder\":\"0\"}],[{\"idlayer\":\"pixlr1\",\"imgsrc\":\"\\/images\\/pixlr-images\\/1486446684.png\",\"top\":\"0\",\"left\":\"0\",\"width\":\"850\",\"height\":\"446\",\"disporder\":\"1\"}],[{\"idlayer\":\"added-text1\",\"top\":\"361\",\"left\":\"102\",\"text\":\"[first-name] is best represented by a Lamborghini car\",\"font\":\"Chewy\",\"color\":\"rgb(27, 0, 42)\",\"size\":\"32\",\"angle\":\"0\",\"disporder\":\"2\"}]],\"gender\":\"both\"}},{\"result6\":{\"layers\":[[{\"idlayer\":\"added-fb1\",\"imgsrc\":\"\\/images\\/rsz_fb-profile.jpg\",\"top\":\"9\",\"left\":\"586\",\"width\":\"256\",\"height\":\"250\",\"disporder\":\"0\"}],[{\"idlayer\":\"pixlr1\",\"imgsrc\":\"\\/images\\/pixlr-images\\/1486447632.png\",\"top\":\"0\",\"left\":\"0\",\"width\":\"850\",\"height\":\"446\",\"disporder\":\"1\"}],[{\"idlayer\":\"added-text1\",\"top\":\"356\",\"left\":\"60\",\"text\":\"     [first-name] is best represented by a Mazda car\",\"font\":\"Chewy\",\"color\":\"rgb(129, 0, 0)\",\"size\":\"38\",\"angle\":\"0\",\"disporder\":\"2\"}]],\"gender\":\"both\"}}]",
                "appset" => "{\"fbtitle\":\"Find out what car best represents you!\",\"fbdescription\":\"[first-name] found out what car best represents him\\/her. Click on app and find out your result!\",\"fbimage\":\"generatedimage\",\"disp-media\":\"on\",\"mediatext\":\"[first-name] found out what car best represents him\\/her. Find out your result!\"}",
                "created_at" => date("Y-m-d") . " 00:00:04",
                "updated_at" => date("Y-m-d") . " 00:00:04"
            )

        );

        DB::table('apps')->insert($apps);
    }
}


class SharesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shares')->delete();

        $shares = array(
            array(
                "id" => 1,
                "name" => "total",
                "value" => 0,
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ),

            array(
                "id" => 2,
                "name" => "today",
                "value" => 0,
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ),

            array(
                "id" => 3,
                "name" => "generated_total",
                "value" => 0,
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ),

            array(
                "id" => 4,
                "name" => "generated_today",
                "value" => 0,
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            )
        );

        DB::table('shares')->insert($shares);
    }
}

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->delete();

        $users = array(
            array(
                "id" => 1,
                "title" => "Terms and conditions",
                "url" => "terms-and-conditions",
                "content" => "<div style=\"text-align: center;\"><strong>Terms content</strong></div>",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            )
        );

        DB::table('pages')->insert($users);
    }
}



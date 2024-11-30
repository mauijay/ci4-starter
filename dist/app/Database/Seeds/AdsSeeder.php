<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdsSeeder extends Seeder
{
  public function run()
  {
      
    $am = model('AdvModel');
      
    $am->insertBatch([
      [
        'id_client'   => 1050,
        'campaign'    => '808bs-1',
        'text_ads'    => '<p>Try Our Free Trial Today! <a title="Get Pro IP locator Script" href="https://808businesssolutions.com?route=product/product&amp;path=65&amp;product_id=59">CLICK HERE</a>',
        'ad728x90'    => '<a href="https://808businesssolutions.com/news" target="_blank"><img src="/uploads/advertizement/808bs/728.90.png" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad250x125'   => '',
        'ad250x250'   => '',
        'ad250x300'   => '',
        'ad300x250'   => '',
        'ad300x300'   => '<a href="https://808businesssolutions.com" target="_blank"><img src="/uploads/advertizement/808bs/maro_300x300.png" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad300x600'   => '<a onclick="ga("send", "event", "Sidebar Button ShopAd", "Click", "/event-tracking/click/sidebar-button/");" class="button" href="https://808businesssolutions.com/shop"><img src="/uploads/advertizement/808bs/banner-02.jpg" alt="tall Ad Img" width="100%" height="100%"></a>',
        'ad320x100'   => '',
        'ad320x320'   => '<a href="https://808businesssolutions.com/net30" target="_blank"><img src="/uploads/advertizement/808bs/advHere.jpg" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad320x480'   => '',
        'ad480x60'    => '',
        'status'      => 1
      ],
      [
        'id_client'   => 1051,
        'campaign'    => 'Vacations-1',
        'text_ads'    => '<p>Try Last Minute Vacation Rentals Today! <a title="Get Pro IP locator Script" href="https://yourlastminutevacationrentals.com/?route=product/product&amp;path=65&amp;product_id=59">CLICK HERE</a> </p><p>Get 20,000 Unique Traffic for $5 [Limited Time Offer] - <a title="Get 20,000 Unique Traffic" href="https://yourlastminutevacationrentals.com/">Buy Now! CLICK HERE</a></p><p>A to Z SEO Tools - Get Now for $35 ! <a title="50 SEO Tools Bundle" href="https://yourlastminutevacationrentals.com/?ref=RainbowDeals">CLICK HERE</a></p>',
        'ad728x90'    => '<a href="https://yourlastminutevacationrentals.com/" target="_blank"><img src="/uploads/advertizement/728.90.png" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad250x125'   => '<a href="https://yourlastminutevacationrentals.com/" target="_blank"><img src="https://prothemes.biz/image/dummy-xd/250x125.png" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad250x250'   => '',
        'ad250x300'   => '<a href="https://yourlastminutevacationrentals.com/" target="_blank"><img src="https://prothemes.biz/image/dummy-xd/250x300.png" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad300x250'   => '',
        'ad300x300'   => '',
        'ad300x600'   => '',
        'ad320x100'   => '',
        'ad320x320'   => '',
        'ad320x480'   => '',
        'ad480x60'    => '<a href="https://yourlastminutevacationrentals.com/" target="_blank"><img src="https://prothemes.biz/image/dummy-xd/468x70.png" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'status'      => 1
      ],
      [
        'id_client'   => 1059,
        'campaign'    => 'kingNissan-companion.11.01.2023',
        'text_ads'    => '<p>Try Pro IP locator Script Today! <a title="Get Pro IP locator Script" href="https://www.kingwindwardnissan.com?ref=808BusinessSolutions">CLICK HERE</a>',
        'ad728x90'    => '<a href="https://www.kingwindwardnissan.com/VehicleSearchResults?make=Nissan&model=Ariya&ref=808BusinessSolutions" target="_blank"><img src="/uploads/advertizement/nissan/companion_728x90.jpg" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad250x125'   => '',
        'ad250x250'   => '',
        'ad250x300'   => '',
        'ad300x250'   => '<a href="https://www.kingwindwardnissan.com?ref=808BusinessSolutions" target="_blank"><img src="/uploads/advertizement/nissan/companion_300x250.jpg" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad300x300'   => '',
        'ad300x600'   => '<a href="https://www.kingwindwardnissan.com?ref=808BusinessSolutions" target="_blank"><img src="/uploads/advertizement/nissan/companion_300x600.jpg" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad320x100'   => '<a href="https://www.kingwindwardnissan.com?ref=808BusinessSolutions" target="_blank"><img src="/uploads/advertizement/nissan/DSG320x100.jpg" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad320x320'   => '',
        'ad320x480'   => '<a href="https://www.kingwindwardnissan.com/ev-center?808_Business_Solutions" target="_blank"><img src="/uploads/advertizement/nissan/23Ariya_VoltaBanners_320x480.png" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad480x60'    => '',
        'status'      => 1
      ],
      [
        'id_client'   => 1059,
        'campaign'    => 'kingNissan-DSG.10.30.2023',
        'text_ads'    => '<p>Try Pro IP locator Script Today! <a title="Get Pro IP locator Script" href="http://prothemes.biz/index.php?route=product/product&amp;path=65&amp;product_id=59">CLICK HERE</a>',
        'ad728x90'    => '<a href="https://www.kingwindwardnissan.com/VehicleSearchResults?make=Nissan&model=Ariya&ref=808BusinessSolutions" target="_blank"><img src="/uploads/advertizement/nissan/DSG728x90.jpg" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad250x125'   => '',
        'ad250x250'   => '',
        'ad250x300'   => '',
        'ad300x250'   => '<a href="https://www.kingwindwardnissan.com?ref=808BusinessSolutions" target="_blank"><img src="/uploads/advertizement/nissan/DSG300x250.jpg" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad300x300'   => '',
        'ad300x600'   => '<a href="https://www.kingwindwardnissan.com?ref=808BusinessSolutions" target="_blank"><img src="/uploads/advertizement/nissan/300x600.jpg" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad320x100'   => '<a href="https://www.kingwindwardnissan.com?ref=808BusinessSolutions" target="_blank"><img src="/uploads/advertizement/nissan/DSG320x100.jpg" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad320x320'   => '',
        'ad320x480'   => '<a href="https://www.kingwindwardnissan.com/ev-center?808_Business_Solutions" target="_blank"><img src="/uploads/advertizement/nissan/23Ariya_VoltaBanners_320x480.png" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad480x60'    => '',
        'status'      => 1
      ],
      [
        'id_client'   => 1059,
        'campaign'    => 'Nissan-test.08.30.2023',
        'text_ads'    => '<p>Try Pro IP locator Script Today! <a title="Get Pro IP locator Script" href="http://prothemes.biz/index.php?route=product/product&amp;path=65&amp;product_id=59">CLICK HERE</a>',
        'ad728x90'    => '<a href="https://www.kingwindwardnissan.com/VehicleSearchResults?make=Nissan&model=Ariya&ref=808BusinessSolutions" target="_blank"><img src="/uploads/advertizement/nissan/728x90.jpg" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad250x125'   => '',
        'ad250x250'   => '',
        'ad250x300'   => '',
        'ad300x250'   => '<a href="https://www.kingwindwardnissan.com?ref=808BusinessSolutions" target="_blank"><img src="/uploads/advertizement/nissan/300x250.jpg" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad300x300'   => '',
        'ad300x600'   => '<a href="https://www.kingwindwardnissan.com?ref=808BusinessSolutions" target="_blank"><img src="/uploads/advertizement/nissan/300x600.jpg" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad320x100'   => '<a href="https://www.kingwindwardnissan.com?ref=808BusinessSolutions" target="_blank"><img src="/uploads/advertizement/nissan/DSG320x100.jpg" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad320x320'   => '',
        'ad320x480'   => '<a href="https://www.kingwindwardnissan.com/ev-center?808_Business_Solutions" target="_blank"><img src="/uploads/advertizement/nissan/23Ariya_VoltaBanners_320x480.png" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad480x60'    => '',
        'status'      => 1
      ],
      [
        'id_client'   => 1060,
        'campaign'    => '808biz-1',
        'text_ads'    => '<p>Start Your Business Today! <a title="Get Pro IP locator Script" href="https://808.biz?route=product/product&amp;path=65&amp;product_id=59">CLICK HERE</a>',
        'ad728x90'    => '<a href="https://808.biz" target="_blank"><img src="/uploads/advertizement/808biz/728.90.a.png" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad250x125'   => '',
        'ad250x250'   => '<a href="https://808.biz" target="_blank"><img src="/uploads/advertizement/808biz/250.250.png" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad250x300'   => '',
        'ad300x250'   => '',
        'ad300x300'   => '<a href="https://808.biz" target="_blank"><img src="/uploads/advertizement/808biz/campaign_300x300.png" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad300x600'   => '<a onclick="ga("send", "event", "Sidebar Button ShopAd", "Click", "/event-tracking/click/sidebar-button/");" class="button" href="https://808.biz/shop"><img src="/uploads/advertizement/808biz/banner-02.png" alt="tall Ad Img" width="100%" height="100%"></a>',
        'ad320x100'   => '',
        'ad320x320'   => '',
        'ad320x480'   => '',
        'ad480x60'    => '',
        'status'      => 1
      ],
      [
        'id_client'   => 1056,
        'campaign'    => 'hiOneSushi-1',
        'text_ads'    => '<p>Try Happy Hour Today! <a title="Get Pro IP locator Script" href="https://hionesushi.808.biz?route=product/product&amp;path=65&amp;product_id=59">CLICK HERE</a>',
        'ad728x90'    => '<a href="https://hionesushi.808.biz?808businesssolutionsAd" target="_blank"><img src="/uploads/advertizement/HiOneSushi/728.90.a.png" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad250x125'   => '',
        'ad250x250'   => '',
        'ad250x300'   => '',
        'ad300x250'   => '',
        'ad300x300'   => '<a href="https://hionesushi.808.biz?808businesssolutionsAd" target="_blank"><img src="/uploads/advertizement/HiOneSushi/campaign_300x300.png" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad300x600'   => '<a href="https://hionesushi.808.biz?808businesssolutionsAd" target="_blank"><img src="/uploads/advertizement/HiOneSushi/campaign_300x600.png" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad320x100'   => '',
        'ad320x320'   => '',
        'ad320x480'   => '',
        'ad480x60'    => '',
        'status'      => 1
      ],
      [
        'id_client'   => 1061,
        'campaign'    => '808pic-1',
        'text_ads'    => '<p>Try our Photoshoot Today! <a title="Get Pro IP locator Script" href="https://808pic.com?route=product/product&amp;path=65&amp;product_id=59">CLICK HERE</a>',
        'ad728x90'    => '<a href="https://808pic.com" target="_blank"><img src="/uploads/advertizement/808pic/808pic728x90.jpg" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad250x125'   => '',
        'ad250x250'   => '',
        'ad250x300'   => '',
        'ad300x250'   => '',
        'ad300x300'   => '<a href="https://808pic.com" target="_blank"><img src="/uploads/advertizement/808pic/campaign_300x300.png" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad300x600'   => '<a href="https://808pic.com" target="_blank"><img src="/uploads/advertizement/808pic/campaign_300x600.png" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad320x100'   => '',
        'ad320x320'   => '',
        'ad320x480'   => '',
        'ad480x60'    => '',
        'status'      => 1
      ],
      [
        'id_client'   => 1062,
        'campaign'    => '808coupons-1',
        'text_ads'    => '<p>Try a Discount Coupon Today! <a title="Get Pro IP locator Script" href="https://808coupons.com?route=product/product&amp;path=65&amp;product_id=59">CLICK HERE</a>',
        'ad728x90'    => '<a href="https://808coupons.com" target="_blank"><img src="/uploads/advertizement/808coupons/coupons728x90.jpg" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad250x125'   => '',
        'ad250x250'   => '',
        'ad250x300'   => '',
        'ad300x250'   => '',
        'ad300x300'   => '<a href="https://808coupons.com" target="_blank"><img src="/uploads/advertizement/808coupons/campaign_300x300.png" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad300x600'   => '<a href="https://808coupons.com" target="_blank"><img src="/uploads/advertizement/808coupons/campaign_300x600.png" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad320x100'   => '',
        'ad320x320'   => '',
        'ad320x480'   => '',
        'ad480x60'    => '',
        'status'      => 1
      ],
      [
        'id_client'   => 1058,
        'campaign'    => 'pandorsCafe-1',
        'text_ads'    => '<p>Try a Karaoke Room Tonight! <a title="Get Pro IP locator Script" href="https://pandoracafehonolulu.com?route=product/product&amp;path=65&amp;product_id=59">CLICK HERE</a>',
        'ad728x90'    => '<a href="https://pandoracafehonolulu.com" target="_blank"><img src="/uploads/advertizement/PandoraCafe/hmn728x90.png" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad250x125'   => '',
        'ad250x250'   => '',
        'ad250x300'   => '<a href="https://pandoracafehonolulu.com" target="_blank"><img src="/uploads/advertizement/PandoraCafe/pandora_250x250.png" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad300x250'   => '',
        'ad300x300'   => '<a href="https://pandoracafehonolulu.com" target="_blank"><img src="/uploads/advertizement/PandoraCafe/pandora_300x300.png" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad300x600'   => '',
        'ad320x100'   => '',
        'ad320x320'   => '<a href="https://pandoracafehonolulu.com" target="_blank"><img src="/uploads/advertizement/PandoraCafe/pandora_320x320.png" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad320x480'   => '',
        'ad480x60'    => '',
        'status'      => 1
      ],
      [
        'id_client'   => 1052,
        'campaign'    => 'foia-1',
        'text_ads'    => '<p>Try a New Artwork Today! <a title="Get Pro IP locator Script" href="https://frankolivaislandart.com/series/aboriginal-series?route=product/product&amp;path=65&amp;product_id=59">CLICK HERE</a>',
        'ad728x90'    => '<a href="https://frankolivaislandart.com/series/aboriginal-series" target="_blank"><img src="/uploads/advertizement/728.90.b.png" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad250x125'   => '',
        'ad250x250'   => '<a href="https://frankolivaislandart.com/series/aboriginal-series" target="_blank"><img src="/uploads/advertizement/foia/foia_250x250.png" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad250x300'   => '',
        'ad300x250'   => '',
        'ad300x300'   => '<a href="https://frankolivaislandart.com/series/aboriginal-series" target="_blank"><img src="/uploads/advertizement/foia/foia_250x250.png" width="100%" height="auto" alt="Paid advertisement space available on 808 business solutions"></a>',
        'ad300x600'   => '',
        'ad320x100'   => '',
        'ad320x320'   => '',
        'ad320x480'   => '',
        'ad480x60'    => '',
        'status'      => 1
      ]                 
    ]);
  }
}

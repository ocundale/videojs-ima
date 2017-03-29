<?php
// $_SERVER['HTTP_REFERER'] ='https://coull.com/';
$sReferer = (true == isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : '';
$sAllowOrigin = '*';

if (false == empty($sReferer)) {
    if (true == preg_match('#^(https?://(?:[^/]+)).*$#', $sReferer, $aCapture)) {
        $sAllowOrigin = $aCapture[1];
    }
}
header('Content-type: text/xml');
header('Access-Control-Allow-Origin: ' . $sAllowOrigin);
header('Access-Control-Allow-Credentials: true');?><VAST version="2.0">
    <Ad id="nonlinear-vpaid-test">
        <InLine>
            <AdSystem>Coull</AdSystem>
            <AdTitle>Coull Creative</AdTitle>
            <Creatives>
                <Creative id="nonlinear-vpaid-ad" sequence="1">
                    <NonLinearAds>
                        <NonLinear id="" width="468" height="60" apiFramework="VPAID">
                            <StaticResource creativeType="application/javascript"><![CDATA[//coullwebsdk.herokuapp.com/nonlinearvpaid/vpaidExamples/nonLinear/VpaidNonLinear.js]]></StaticResource>
                            <AdParameters>
                                <![CDATA[{"overlays":["https://player.coullmedia.com/vidlinkr/img/coull-house-468.png"]}]]>
                                <linear>false</linear>
                            </AdParameters>
                        </NonLinear>
                        <NonLinear id="" width="468" height="60" apiFramework="VPAID">
                            <StaticResource creativeType="application/x-shockwave-flash"><![CDATA[http://ERROR-html5-only-demo]]></StaticResource>
                            <AdParameters>
                                <linear>false</linear>
                            </AdParameters>
                        </NonLinear>
                    </NonLinearAds>
                </Creative>
            </Creatives>
            <Extensions>
            </Extensions>
        </InLine>
    </Ad>
</VAST>

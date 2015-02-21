<?php
namespace SocialiteProviders\AppNet;

use SocialiteProviders\Manager\SocialiteWasCalled;

class AppNetExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('appnet', __NAMESPACE__.'\Provider');
    }
}

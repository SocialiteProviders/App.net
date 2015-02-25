<?php
namespace SocialiteProviders\AppNet;

use SocialiteProviders\Manager\SocialiteWasCalled;

class AppNetExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'appnet', __NAMESPACE__.'\Provider'
        );
    }
}

<?php

namespace InfusionsoftSocialite;

use SocialiteProviders\Manager\SocialiteWasCalled;

class InfusionsoftExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('infusionsoft', __NAMESPACE__.'\Provider');
    }
}

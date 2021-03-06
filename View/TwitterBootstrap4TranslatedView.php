<?php declare(strict_types=1);

namespace BabDev\PagerfantaBundle\View;

trigger_deprecation('babdev/pagerfanta-bundle', '2.2', 'The "%s" class is deprecated and will be removed in 3.0. Use the "%s" class instead.', TwitterBootstrap4TranslatedView::class, TwigView::class);

/**
 * @deprecated to be removed in BabDevPagerfantaBundle 3.0. Use the Twig view class instead with the `twitter_bootstrap4.html.twig` template.
 */
class TwitterBootstrap4TranslatedView extends TwitterBootstrapTranslatedView
{
    public function getName()
    {
        return 'twitter_bootstrap4_translated';
    }
}

<?php declare(strict_types=1);

namespace BabDev\PagerfantaBundle\View;

trigger_deprecation('babdev/pagerfanta-bundle', '2.2', 'The "%s" class is deprecated and will be removed in 3.0. Use the "%s" class instead.', TwitterBootstrapTranslatedView::class, TwigView::class);

/**
 * @deprecated to be removed in BabDevPagerfantaBundle 3.0. Use the Twig view class instead with the `twitter_bootstrap.html.twig` template.
 */
class TwitterBootstrapTranslatedView extends TranslatedView
{
    protected function previousMessageOption()
    {
        return 'prev_message';
    }

    protected function nextMessageOption()
    {
        return 'next_message';
    }

    protected function buildPreviousMessage($text)
    {
        return sprintf('&larr; %s', $text);
    }

    protected function buildNextMessage($text)
    {
        return sprintf('%s &rarr;', $text);
    }

    public function getName()
    {
        return 'twitter_bootstrap_translated';
    }
}

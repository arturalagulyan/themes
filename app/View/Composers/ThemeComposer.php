<?php
namespace App\View\Composers;

use App\Enums\Theme;
use Exception;
use Illuminate\Support\Facades\Request;
use Illuminate\View\View;

class ThemeComposer
{
    /**
     * @param View $view
     * @return void
     * @throws Exception
     */
    public function compose(View $view): void
    {
        $theme_enum = Theme::CLASSIC;
        $theme = $this->getTheme();
        if (!empty($theme)) {
            $theme_enum = Theme::tryFrom($theme);
            if (empty($theme_enum)) {
                throw new Exception("Theme '$theme' not found.");
            }
        }
        $view->with('theme', $theme_enum->value);
    }

    private function getTheme(): string|null
    {
        return Request::get('theme');
    }
}

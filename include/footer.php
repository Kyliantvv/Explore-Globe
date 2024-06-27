<?php

interface FooterInterface
{
    public function renderFooter(): string;
}

trait FooterTrait
{
    private function renderColumn(string $title, array $links): string
    {
        $html = '<div class="footer-col">';
        $html .= "<h4>{$title}</h4>";
        $html .= '<ul>';
        foreach ($links as $text => $url) {
            $html .= "<li><a href=\"{$url}\">{$text}</a></li>";
        }
        $html .= '</ul>';
        $html .= '</div>';
        return $html;
    }
}

class Footer implements FooterInterface
{
    use FooterTrait;

    public function renderFooter(): string
    {
        $columns = [
            'Explore Globe' => [
                'À propos' => '#',
                'Nos services' => '#',
                'Plan du site' => '#',
                'Inscrivez votre établissement' => '#'
            ],
            'Obtenir de l\'aide' => [
                'FAQ' => '#',
                'Contactez-nous' => '#',
                'Centre d\'aide' => '#'
            ],
            'Légal' => [
                'Politique de confidentialité' => '#',
                'Conditions Générales de vente' => '#',
                'Politique de cookies' => '#',
                'Mentions légales' => '#'
            ],
            'Suivez-nous' => [
                '<i class="fab fa-facebook-f"></i>' => '#',
                '<i class="fab fa-twitter"></i>' => '#',
                '<i class="fab fa-instagram"></i>' => '#',
                '<i class="fab fa-linkedin-in"></i>' => '#'
            ]
        ];

        $html = '<footer class="footer"><div class="container-footer"><div class="row">';
        foreach ($columns as $title => $links) {
            if ($title === 'Suivez-nous') {
                $html .= '<div class="footer-col"><h4>' . $title . '</h4><div class="social-links">';
                foreach ($links as $icon => $url) {
                    $html .= "<a href=\"{$url}\">{$icon}</a>";
                }
                $html .= '</div></div>';
            } else {
                $html .= $this->renderColumn($title, $links);
            }
        }
        $html .= '</div></div>';

        return $html;
    }
}

$footer = new Footer();
echo $footer->renderFooter();


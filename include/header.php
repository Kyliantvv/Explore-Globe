    <?php
class Header {
    private $logoText;
    private $logoLink;
    private $navLinks = [];

    // logo
    public function __construct($logoText, $logoLink = '#') {
        $this->logoText = $logoText;
        $this->logoLink = $logoLink;
    }

    //  ajouter un lien de navigation
    public function addNavLink($text, $link) {
        $this->navLinks[] = ['text' => $text, 'link' => $link];
    }

    //  générer le HTML de l'en-tête
    public function generateHeader() {
        $headerHTML = '<header class="header">';
        $headerHTML .= '<a href="' . $this->logoLink . '" class="logo">' . $this->logoText . '</a>';
        $headerHTML .= '<nav class="navbar">';

        foreach ($this->navLinks as $navLink) {
            $headerHTML .= '<a href="' . $navLink['link'] . '">' . $navLink['text'] . '</a>';
        }

        $headerHTML .= '</nav>';
        $headerHTML .= '</header>';

        return $headerHTML;
    }
}


$header = new Header('Explore Globe');
$header->addNavLink('Accueil', '/../ExploreGlobeFIN/index.php');
$header->addNavLink('Nos destinations', '/../ExploreGlobeFIN/destination.php');
$header->addNavLink('Nous contacter', '/../ExploreGlobeFIN/contact.php');

echo $header->generateHeader();
?>



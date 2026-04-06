<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="google-site-verification" content="hjIYzypC2sCZInSix-wCyqulpEZbE_6yH1Ev_UZb0A4">
<meta name="msvalidate.01" content="0F652D91935F25317C22102440B50132">
<meta name="Content-Language" content="fr">
<meta name="Description" content="<?php echo isset($metaDescription) ? htmlspecialchars($metaDescription) : "SPEAKERS'CORNER certifié QUALOPI, propose des formations en anglais pour les particuliers et les professionnels à Latresne, Bordeaux et en Gironde"; ?>">
<meta name="Keywords" content="formations en anglais, anglais pour tous, cours anglais gironde, cours anglais bordeaux, cours anglais rive droite, cours anglais latresne, cours anglais enfants, cours anglais adultes, organisme de formation, formation anglais entreprise">
<meta name="publisher" content="iconeo.fr">
<meta name="author" content="iconeo.fr">
<meta name="Robots" content="all">
<?php
$_canonical_base = 'https://www.speakerscornerlanguage.fr';
$_canonical_page = basename($_SERVER['PHP_SELF']);
$_canonical_url  = $_canonical_base . '/' . $_canonical_page;
if (!empty($_SERVER['QUERY_STRING'])) {
    $_canonical_url .= '?' . $_SERVER['QUERY_STRING'];
}
$_og_title = isset($ogTitle) ? $ogTitle : (isset($pageTitle) ? $pageTitle : "Speakers'Corner Language");
$_og_desc  = isset($metaDescription) ? $metaDescription : "SPEAKERS'CORNER certifié QUALOPI, propose des formations en anglais pour les particuliers et les professionnels à Latresne, Bordeaux et en Gironde";
$_og_image = isset($ogImage) ? $ogImage : $_canonical_base . '/images/logo-home.png';
?>
<link rel="canonical" href="<?php echo htmlspecialchars($_canonical_url); ?>">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Speakers'Corner Language">
<meta property="og:url" content="<?php echo htmlspecialchars($_canonical_url); ?>">
<meta property="og:title" content="<?php echo htmlspecialchars($_og_title); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($_og_desc); ?>">
<meta property="og:image" content="<?php echo htmlspecialchars($_og_image); ?>">
<meta property="og:locale" content="fr_FR">
<link rel="icon" href="/img/favicon.ico" type="image/x-icon">
<!-- Schema.org structured data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LanguageSchool",
  "name": "Speakers'Corner Language",
  "url": "https://www.speakerscornerlanguage.fr",
  "logo": "https://www.speakerscornerlanguage.fr/images/logo-home.png",
  "image": "https://www.speakerscornerlanguage.fr/images/logo-home.png",
  "description": "Organisme de formation certifié QUALOPI proposant des cours d'anglais pour enfants, adultes et professionnels en Gironde.",
  "telephone": "+33675577277",
  "email": "contact@speakerscornerlanguage.fr",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "7 rue de la Salargue",
    "addressLocality": "Latresne",
    "postalCode": "33360",
    "addressCountry": "FR"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 44.7849,
    "longitude": -0.4984
  },
  "openingHoursSpecification": [
    {"@type": "OpeningHoursSpecification", "dayOfWeek": "Monday", "opens": "09:00", "closes": "20:00"},
    {"@type": "OpeningHoursSpecification", "dayOfWeek": "Tuesday", "opens": "09:00", "closes": "20:00"},
    {"@type": "OpeningHoursSpecification", "dayOfWeek": "Wednesday", "opens": "09:00", "closes": "19:00"},
    {"@type": "OpeningHoursSpecification", "dayOfWeek": "Thursday", "opens": "09:00", "closes": "20:00"}
  ],
  "hasCredential": {
    "@type": "EducationalOccupationalCredential",
    "credentialCategory": "certification",
    "name": "Certification QUALOPI"
  },
  "sameAs": []
}
</script>
<!-- Bootstrap 5 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<!-- Styles du site -->
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/responsive.css">

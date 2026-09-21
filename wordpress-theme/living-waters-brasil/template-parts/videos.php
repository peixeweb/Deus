<?php
/**
 * Living Waters Brasil - Videos Section (Editável via Customizer)
 *
 * @package Living_Waters_Brasil
 * @version 2.0.0
 */
$theme_uri = get_template_directory_uri();
$primary   = get_theme_mod('lw_color_primary', '#fd651e');

$videos = array();
for ($i = 1; $i <= 6; $i++) {
    $title = get_theme_mod("lw_video_{$i}_title", '');
    if (empty($title)) continue;
    $videos[] = array(
        'title'     => $title,
        'youtube_id'=> get_theme_mod("lw_video_{$i}_youtube_id", ''),
        'category'  => get_theme_mod("lw_video_{$i}_category", ''),
        'duration'  => get_theme_mod("lw_video_{$i}_duration", ''),
        'thumbnail' => get_theme_mod("lw_video_{$i}_thumbnail", ''),
    );
}

if (empty($videos)) {
    $videos = array(
        array('title' => '180 Movie: A Mudança Radical de Mentalidade', 'youtube_id' => '7y2KsU_dhwI', 'category' => 'Documentário', 'duration' => '33 min', 'thumbnail' => ''),
        array('title' => 'Genius: John Lennon e a Busca pelo Sentido', 'youtube_id' => 'Zdu2CjX5XwE', 'category' => 'Música & Razão', 'duration' => '29 min', 'thumbnail' => ''),
        array('title' => 'Diálogo de Rua: A Lei Moral em Ação', 'youtube_id' => 'fR0Fp5Y3qD8', 'category' => 'Evangelismo ao Vivo', 'duration' => '14 min', 'thumbnail' => ''),
    );
}
?>
<section id="videos" aria-label="Produções em Vídeo" class="w-full text-white py-16 lg:py-24" style="background-color:#0d131c;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12">
        <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-12">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider block mb-1" style="color:#ffb89e;">MULTIMÍDIA LIVING WATERS</span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-white font-['Montserrat']">Vídeos &amp; Produções em Destaque</h2>
            </div>
            <a href="https://www.youtube.com/@LivingWatersBrasil" target="_blank" rel="noopener noreferrer"
                class="text-xs sm:text-sm font-semibold mt-2 sm:mt-0 flex items-center gap-1 hover:opacity-80 transition-opacity" style="color:<?php echo esc_attr($primary); ?>">
                <span>Canal no YouTube</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline>
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php foreach ($videos as $video) :
                $thumb = $video['thumbnail'] ? $video['thumbnail'] : $theme_uri . '/assets/images/ray-comfort.jpg';
            ?>
            <div class="lw-video-card rounded-2xl overflow-hidden border transition-all group cursor-pointer" style="background-color:#16202c; border-color:#222f3e;" data-video-title="<?php echo esc_attr($video['title']); ?>" data-youtube-id="<?php echo esc_attr($video['youtube_id']); ?>">
                <div class="relative h-48 w-full bg-black/40 overflow-hidden">
                    <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($video['title']); ?>"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform" style="background-color:<?php echo esc_attr($primary); ?>">
                            <svg class="w-5 h-5 fill-white ml-0.5" viewBox="0 0 24 24"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
                        </div>
                    </div>
                    <?php if ($video['duration']) : ?>
                        <span class="absolute bottom-3 right-3 px-2 py-0.5 rounded bg-black/80 text-[11px] font-bold"><?php echo esc_html($video['duration']); ?></span>
                    <?php endif; ?>
                </div>
                <div class="p-5">
                    <?php if ($video['category']) : ?>
                        <span class="text-[10px] font-bold uppercase tracking-wider" style="color:<?php echo esc_attr($primary); ?>"><?php echo esc_html($video['category']); ?></span>
                    <?php endif; ?>
                    <h3 class="text-base font-bold text-white mt-1 mb-2 group-hover:text-[#fd651e] transition-colors"><?php echo esc_html($video['title']); ?></h3>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

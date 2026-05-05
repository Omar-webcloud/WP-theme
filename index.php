<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Redo_Theme
 */

get_header();
?>

        <!-- hero -->
        <section class="hero">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Hero.png" alt="" />
        </section>

        <!-- guidelines -->
        <section class="guidelines p-32">
            <div class="guide-heading">
                <h1 class="heading-1">
                    Brand <br />
                    Guidelines
                </h1>
            </div>
            <div class="guide-content paragraph-1">
                <p>
                    This guide defines the visual language, design style, and
                    principles that shape a clear and consistent brand experience,
                    no matter the team or area of expertise.
                </p>
                <br /><br />
                <p>
                    At its core, Redo is about precision and clarity—just like our
                    mission to correct financial errors and optimize balance sheets.
                    This guide lays out the essential design standards that bring
                    our brand to life, from our color system and typography to
                    accessibility benchmarks and documentation.
                </p>
                <br /><br />
                <p>
                    Whether you're designing for digital platforms or printed
                    materials, these guidelines ensure every touchpoint reflects the
                    trust and efficiency at the heart of Redo.
                </p>
            </div>
        </section>

        <!-- contents -->
        <section class="content-table p-32">
            <div class="content-heading">
                <h2 class="heading-2">Contents</h2>
            </div>

            <div class="content-info">
                <h2 class="heading-2">
                    <span class="content-num">01</span> Brand Strategy
                </h2>
                <h2 class="heading-2">
                    <span class="content-num">02</span> Personality
                </h2>
                <h2 class="heading-2">
                    <span class="content-num">03</span> Logo
                </h2>
                <h2 class="heading-2">
                    <span class="content-num">04</span> Color
                </h2>
                <h2 class="heading-2">
                    <span class="content-num">05</span> Typography
                </h2>
                <h2 class="heading-2">
                    <span class="content-num">06</span> Art Direction
                </h2>
            </div>
        </section>

        <!-- strategy -->
        <section id="section-1" class="strategy p-32">
            <div class="strategy-heading">
                <h1 class="heading-1">
                    <span class="span-orange">01 </span>Brand <br />Strategy
                </h1>
            </div>

            <div class="strategy-info">
                <p class="strategy-content">
                    In the world of finance, mistakes happen—miscalculations,
                    overlooked expenses, inefficiencies that silently erode
                    profitability. Businesses lose money not because they aren't
                    earning, but because errors go unchecked.
                    <br />
                    <br />
                    Redo restores confidence in financial numbers.
                </p>

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Image.png" alt="Illustration representing Redo's brand strategy" />

                <p class="strategy-content">
                    Born from the need for financial clarity, Redo was founded on a
                    simple yet powerful mission: to correct financial errors and
                    optimize balance sheets. We believe that precision is the key to
                    profitability, and that businesses shouldn't be held back by
                    avoidable losses. With advanced technology and expert analysis,
                    we uncover discrepancies, eliminate inefficiencies, and restore
                    confidence in the numbers that drive success.
                    <br /><br />
                    At Redo, we don't just fix mistakes—we empower businesses to
                    move forward with accuracy and efficiency. Because when the
                    numbers are right, the future looks even brighter.
                </p>
            </div>
        </section>

        <!-- personality -->
        <section id="section-2" class="personality p-32">
            <div class="personality-heading">
                <h1 class="heading-1">
                    <span class="span-orange">02 </span>Personality
                </h1>
            </div>

            <div class="personality-info personality-content">
                Redo's voice brings our brand to life through the words we write
                and speak. The way we communicate with customers has the power to
                transform their financial well-being. Through clear and
                intentional language, we make financial corrections simple,
                accessible, and stress-free. Our direct, approachable, and
                transparent voice ensures that fixing mistakes feels effortless—so
                our customers can move forward with confidence.
            </div>
        </section>

        <section class="personality-img p-32">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/IMG.png" alt="" />
        </section>

        <!-- tone -->
        <section class="tone-container p-32">
            <div class="tone-heading">
                <h3 class="heading-3">Tone & Voice</h3>
            </div>
            <div class="tone-info">
                <div>
                    <p class="paragraph-2-bold">Our Vision: why we exist</p>
                    <p class="paragraph-1">
                        To create a future where every business maximizes their
                        potential.
                    </p>
                </div>
                <div>
                    <p class="paragraph-2-bold">Our Mission: what we do</p>
                    <p class="paragraph-1 text-gray">
                        Correct financial errors and optimize balance sheets
                    </p>
                </div>
                <div>
                    <p class="paragraph-2-bold">Our Promise: how we help</p>
                    <p class="paragraph-1 text-gray">
                        Empower businesses to move forward with accuracy and
                        efficiency
                    </p>
                </div>
            </div>
        </section>

        <!-- color -->
        <section id="section-4" class="color-section p-32">
            <div class="color-intro">
                <h1 class="heading-1">
                    <span class="span-orange">04</span> Color
                </h1>
                <p class="paragraph-1 text-gray">
                    Redo's color palette is designed to evoke trust, reliability,
                    and financial clarity, ensuring that every touchpoint reflects
                    our commitment to accuracy and efficiency.
                </p>
            </div>

            <div class="color-contents">
                <div class="color-primary">
                    <h3 class="heading-3">Primary Palette</h3>
                    <div class="color-grid">
                        <div class="color-card">
                            <div style="width:100%;aspect-ratio:1/1;background:#FA9819;border-radius:50%"></div>
                            <div class="color-card-caption">
                                <p class="caption-2">Orange</p>
                                <p class="caption-2">Hex: #FA9819</p>
                            </div>
                        </div>
                        <div class="color-card">
                            <div style="width:100%;aspect-ratio:1/1;background:#B6C9CF;border-radius:50%"></div>
                            <div class="color-card-caption">
                                <p class="caption-2">Blue Tint</p>
                                <p class="caption-2">Hex: #B6C9CF</p>
                            </div>
                        </div>
                        <div class="color-card">
                            <div style="width:100%;aspect-ratio:1/1;background:#FFFFFF;border-radius:50%;border:1px solid rgba(0,0,0,0.8)"></div>
                            <div class="color-card-caption">
                                <p class="caption-2">White</p>
                                <p class="caption-2">Hex: #FFFFFF</p>
                            </div>
                        </div>
                        <div class="color-card">
                            <div style="width:100%;aspect-ratio:1/1;background:#C6EBF7;border-radius:50%"></div>
                            <div class="color-card-caption">
                                <p class="caption-2">Baby Blue</p>
                                <p class="caption-2">Hex: #C6EBF7</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="color-secondary">
                    <h3 class="heading-3">Secondary Palette</h3>
                    <div class="color-grid-secondary">
                        <div class="color-card">
                            <div style="width:100%;aspect-ratio:1/1;background:#1E3D59;border-radius:50%"></div>
                            <div class="color-card-caption">
                                <p class="caption-2">Navy</p>
                                <p class="caption-2">Hex: #1E3D59</p>
                            </div>
                        </div>
                        <div class="color-card">
                            <div style="width:100%;aspect-ratio:1/1;background:#48749E;border-radius:50%"></div>
                            <div class="color-card-caption">
                                <p class="caption-2">Caption</p>
                                <p class="caption-2">Hex: #48749E</p>
                            </div>
                        </div>
                        <div class="color-card">
                            <div style="width:100%;aspect-ratio:1/1;background:#DEEEFE;border-radius:50%"></div>
                            <div class="color-card-caption">
                                <p class="caption-2">Sky Blue</p>
                                <p class="caption-2">Hex: #DEEEFE</p>
                            </div>
                        </div>
                        <div class="color-card">
                            <div style="width:100%;aspect-ratio:1/1;background:#E8EBEF;border-radius:50%"></div>
                            <div class="color-card-caption">
                                <p class="caption-2">Off-blue</p>
                                <p class="caption-2">Hex: #E8EBEF</p>
                            </div>
                        </div>
                        <div class="color-card">
                            <div style="width:100%;aspect-ratio:1/1;background:#CD4900;border-radius:50%"></div>
                            <div class="color-card-caption">
                                <p class="caption-2">Deep Orange</p>
                                <p class="caption-2">Hex: #CD4900</p>
                            </div>
                        </div>
                        <div class="color-card">
                            <div style="width:100%;aspect-ratio:1/1;background:#000000;border-radius:50%"></div>
                            <div class="color-card-caption">
                                <p class="caption-2">Black</p>
                                <p class="caption-2">Hex: #000000</p>
                            </div>
                        </div>
                        <div class="color-card">
                            <div style="width:100%;aspect-ratio:1/1;background:#A3A3A3;border-radius:50%"></div>
                            <div class="color-card-caption">
                                <p class="caption-2">Dark Grey</p>
                                <p class="caption-2">Hex: #A3A3A3</p>
                            </div>
                        </div>
                        <div class="color-card">
                            <div style="width:100%;aspect-ratio:1/1;background:#E5E5E5;border-radius:50%"></div>
                            <div class="color-card-caption">
                                <p class="caption-2">Grey</p>
                                <p class="caption-2">Hex: #E5E5E5</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- typography -->
        <section id="section-5" class="typography-section p-32">
            <div class="typo-intro">
                <h1 class="heading-1">
                    <span class="span-orange">05</span> Typography
                </h1>
                <div class="typo-heading">
                    <p class="paragraph-1 text-gray">
                        Redo's typography balances clarity and professionalism with a
                        modern yet timeless type pairing.
                    </p>
                    <br /><br />
                    <div class="typo-heading-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/letter.png" alt="" />
                    </div>
                </div>
            </div>
        </section>

        <!-- art -->
        <section id="section-6" class="art-section p-32">
            <div class="art-intro">
                <h1 class="heading-1">
                    <span class="span-orange">06</span> Art Direction
                </h1>
                <p class="paragraph-1 text-gray">
                    Redo's photography style reinforces our brand's core values.
                </p>
            </div>
            <div class="art-contents">
                <div class="art-grid">
                    <div class="color-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/woman.png" alt="" />
                        <div class="color-card-caption">
                            <p class="caption-2">Clean & Casual</p>
                        </div>
                    </div>
                    <div class="color-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/man3.png" alt="" />
                        <div class="color-card-caption">
                            <p class="caption-2">Subtle Technology Integration</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php
get_sidebar();
get_footer();

jQuery(function($) {ServicesModuleInitialize();});function ServicesModuleInitialize() {$( document ).on( 's123.page.ready', function( event ) {var $section = $('section.s123-module-services');$section.each(function( index ) {var $sectionThis = $(this);var categories = new ModuleLayoutCategories({$items :  $sectionThis.find('.services-category'),$categoriesContainer : $sectionThis.find('.categories-panel'),$filterButton : $sectionThis.find('.items-responsive-filter'),$categories : $sectionThis.find('.items-categories-container li')});});});}jQuery(function($) {TestimonialsModuleInitialize_Layout1_Layout8_Layout9();});function TestimonialsModuleInitialize_Layout1_Layout8_Layout9() {$( document ).on( "s123.page.ready", function( event ) {var $sections = $('.s123-module-testimonials.layout-1, .s123-module-testimonials.layout-8, .s123-module-testimonials.layout-9');$sections.each(function( index ) {var $s = $(this);var $carousel = $s.find('[data-ride="carousel"]');var layout_customize = $s.find('.layout-customize').length > 0 ? tryParseJSON($s.find('.layout-customize').val()) : '';var testimonialsInterval = 10000;if ( layout_customize != '' ) {testimonialsInterval = layout_customize.testimonialsInterval * 1000;}
$carousel.carousel({interval: isMobile.any() ? false : testimonialsInterval});$carousel.find('.carousel-control.left').click(function() {$carousel.carousel('prev');});$carousel.find('.carousel-control.right').click(function() {$carousel.carousel('next');});$carousel.find('.carousel-indicators li').click(function(){$carousel.carousel($(this).data('slide-to'));});});});$( document ).on( "s123.page.load", function( event ) {setTestimonialsHeight();});if ( IsWizard() ) {$(document).on('wizard.preview.device.changed', function( event ) {setTestimonialsHeight();});}
function setTestimonialsHeight() {var $sections = $('.s123-module-testimonials.layout-1, .s123-module-testimonials.layout-8, .s123-module-testimonials.layout-9');$sections.each(function( index ) {var $s = $(this);var $carousel = $s.find('[data-ride="carousel"]');$carousel.find('.item, .testimonial-image').css({ minHeight: '' });if ( !IsIE11() ) {var selector = $s.hasClass('layout-8') && findBootstrapEnvironment() !== 'xs' ? '.testimonial-image' : '.item';$carousel.find(selector).css({minHeight: Math.max.apply(Math, $carousel.find('.item').map(function() { return $(this).outerHeight(); }))});}});}}jQuery(function($) {TestimonialsModuleInitialize_Layouts();});function TestimonialsModuleInitialize_Layouts() {$( document ).on( "s123.page.ready", function( event ) {var $sections = $('.s123-module-testimonials');$sections.each(function( index ) {var $s = $(this);var $categories = $s.find('.testimonials-category');var categories = new ModuleLayoutCategories({$items :  $s.find('.testimonials-category'),$categoriesContainer : $s.find('.categories-panel'),$filterButton : $s.find('.items-responsive-filter'),$categories : $s.find('.items-categories-container li')});});});}
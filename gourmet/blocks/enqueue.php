<?php 

function g_enqueque_block_editor_assets(){

    wp_register_script(
        'g_blocks_bundle',
        plugins_url('/blocks/dist/bundle.js', GOURMET_PLUGIN_URL),
        ['wp-i18n','wp-element','wp-blocks','wp-components','wp-editor','wp-api'],
        filemtime(plugin_dir_path( GOURMET_PLUGIN_URL) . '/blocks/dist/bundle.js')
    );

    wp_enqueue_script('g_blocks_bundle');
    
}
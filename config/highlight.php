<?php

/**
 * Highlight.io Laravel SDK configuration file.
 */
return [

    /**
     * Set custom backend URL for Highlight.io.
     * This is useful if you are using a self-hosted instance of Highlight.io.
     * If not set, it will default to the Highlight.io cloud backend which was set by official package.
     * 
     * @see https://www.highlight.io/docs/getting-started/self-host/self-hosted-hobby-guide
     */
    'url' => env('HIGHLIGHT_BACKEND_URL', null),

    'project_id' => env('HIGHLIGHT_PROJECT_ID', null),

    //  When left empty or `null` the Laravel environment will be used (usually discovered from `APP_ENV` in your `.env`)
    'environment' => env('HIGHLIGHT_ENVIRONMENT'),
];

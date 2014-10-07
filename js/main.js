// main.js
// referenced by require.js
//
// builds

require.config({
    baseUrl: '/js/',
    paths: {
        jquery: 'plugins/jquery',
        jqueryui: 'plugins/jquery-ui-1.10.4'
    },
    shim: {
        'jqueryui' : {
            deps: ['jquery']
        }
    }
});

require(['jquery']), function(){};
require(['jqueryui']), function(){};
require(['grid']), function(){};
require(['page']), function(){};
require(['tip']), function(){};

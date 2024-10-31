(function() {
    tinymce.create("tinymce.plugins.oab_button_plagin", {

        
        init : function(ed, url) {

             
            ed.addButton("oab_but", {
                title : "Offadblock-wp",
                cmd : "oab_command",
                image : url + '/img/dab-oab-icon.png',

            });

            
            ed.addCommand("oab_command", function() {
                var selected_text = ed.selection.getContent();
                var return_text = "[offadblock_shor]" + selected_text + "[/offadblock_shor]";
                ed.execCommand("mceInsertContent", 0, return_text);
            });

        },

    });

    tinymce.PluginManager.add("oab_button_plagin", tinymce.plugins.oab_button_plagin);
})();
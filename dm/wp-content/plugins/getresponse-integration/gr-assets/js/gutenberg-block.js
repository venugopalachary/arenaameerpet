jQuery(document).ready(function() {
    ( function( blocks, element, components ) {
        var el = element.createElement;
        var Component = components;
        var forms = [{label: 'Loading...', value: ''}];

        var editFormStyle = {
            background: "#f8fbfc",
            padding: "40px",
            textAlign: "center"
        };

        jQuery.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {action: 'gr_get_forms'},
            success: function (result) {
                forms = result.data;
            },
            async: false
        });

        blocks.registerBlockType( 'getresponse/post-block-forms', {
            title: 'GetResponse Form',
            icon: 'feedback',
            category: 'widgets',
            attributes: {
                url: {
                    type: 'string'
                }
            },
            edit: function( props ) {

                return el(
                    'div',
                    {style: editFormStyle},
                    [
                        el(
                            Component.SelectControl,
                            {
                                label: 'GetResponse Form:',
                                value: props.attributes.url,
                                options: forms,
                                onChange: function(val) {
                                    props.setAttributes({url: val});
                                },
                            }
                        )
                    ]
                );
            },
            save: function( props ) {
                return el(
                    'div',
                    {class: 'gr-post-form'},
                    el('script', {type: 'text/javascript', src: props.attributes.url})
                );
            },
        } );
    }(
        window.wp.blocks,
        window.wp.element,
        window.wp.components
    ) );
});








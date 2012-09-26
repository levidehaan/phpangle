
zing.directive('headerNav', function () {
    //template that replaces the <banner></banner> tags
    var editTemplate = '' +
    '<div class="navbar navbar-fixed-top">' +
    '    <div class="navbar-inner">' +
    '        <div class="container-fluid">' +
    '            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">' +
    '                <span class="icon-bar"></span>' +
    '                <span class="icon-bar"></span>' +
    '                <span class="icon-bar"></span>' +
    '            </a>' +
    '            <a class="brand" href="/"><?php echo $this->headerTitle; ?></a>' +
    '            <div class="nav-collapse">' +
    '                <ul class="nav" id="navigation">' +
    '                </ul>' +
    '            </div>' +
    '        </div>' +
    '    </div>' +
    '</div>';
    return {
        //element scope
        restrict:'E',
        //scope allows multiple instances of the same module
        scope:{},
        //template element passes through here before it is actually rendered as a template
        compile:function (tElement, tAttr, transclude) {

            //grab the json from the element
            var input = $.parseJSON(tElement.text());
            $(tElement).data("headerNav", tElement.text());

            //check the window.screen.width and remove either mobile or desktop from object to pass to the template scope object
            var sizedInput = parseDevice(input);

            //replace the element with the editTemplate template
            tElement.html(editTemplate);

            return {
                //pre render pass the scope to the template
                pre:function (scope, element, attrs) {

                    $(window).on('resize', function () {
                        scope.$apply(function(){
                            scope.rowItemBig = parseDevice($.parseJSON($(tElement).data("headerNav")));
                        });
                    });

                    scope.rowItemBig = sizedInput;
                }
            }
        }

    }
});
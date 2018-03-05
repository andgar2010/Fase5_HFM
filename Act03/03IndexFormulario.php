<!doctype html>
<html lang="es">

<head>
    <title>Formulario 03</title>
    <!-- required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="https://propeller.in/assets/images/favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

    <!-- Propeller -->
    <link rel="stylesheet" href="https://propeller.in/assets/css/propeller.min.css">
    <link rel="stylesheet" href="https://propeller.in/html-themes/propeller-admin/themes/css/propeller-theme.css">

    <!--prism code previewer -->
    <link rel="stylesheet" href="https://propeller.in/docs/css/prism.css">
    <link rel="stylesheet" href="https://propeller.in/docs/css/prism-line-numbers.css" data-noprefix="">

    <!-- Google icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- css for data table component-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.1.0/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.2.0/css/select.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://propeller.in/components/data-table/css/pmd-datatable.css">

    <!--css for custom scrollbar component -->
    <link rel="stylesheet" type="text/css" href="https://propeller.in/components/custom-scrollbar/css/jquery.mCustomScrollbar.css">

    <!--css for Range slider -->
    <link rel="stylesheet" type="text/css" href="https://propeller.in/components/range-slider/css/nouislider.min.css">
    <link rel="stylesheet" type="text/css" href="https://propeller.in/components/range-slider/css/range-slider.css">

    <!-- css for datepicker -->
    <link rel="stylesheet" type="text/css" href="https://propeller.in/components/datetimepicker/css/bootstrap-datetimepicker.css">
    <link rel="stylesheet" type="text/css" href="https://propeller.in/components/datetimepicker/css/pmd-datetimepicker.css">

    <link rel="stylesheet" type="text/css" href="https://propeller.in/components/custom-scrollbar/css/pmd-scrollbar.css">

    <!--    Select2 css-->
    <link rel="stylesheet" type="text/css" href="https://propeller.in/components/select2/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="https://propeller.in/components/select2/css/select2-bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://propeller.in/components/select2/css/pmd-select2.css">

    <!--css for docs -->
    <link rel="stylesheet" type="text/css" href="https://propeller.in/docs/css/docs.css">

    <!--    Propeller typography-->
    <link rel="stylesheet" href="http://propeller.in/components/typography/css/typography.css">

    <!--    Propeller text fields-->
    <link rel="stylesheet" href="http://propeller.in/components/textfield/css/textfield.css">

    <!--    Propeller radio-->
    <link rel="stylesheet" href="http://propeller.in/components/radio/css/radio.css">

    <!--    Propeller select2 -->
    <link rel="stylesheet" href="http://propeller.in/components/select2/css/pmd-select2.css">

    <!-- Uppy -->
    <link href="https://transloadit.edgly.net/releases/uppy/v0.23.2/dist/uppy.min.css" rel="stylesheet">

</head>

<body>

    <div class="container">
        <div class="col-lg-8">

            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-center">Formulario 03</h2>
                    <!-- <h6 class="card-subtitle text-muted">Subtitle</h6> -->
                </div>

                <div class="card-body">
                    <div class="col-lg-12">
                        <form class="" name="form3" action="<?PHP echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data" >

                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Regular Input with Floating labels -->
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label for="nombre1" class="control-label">Nombre:</label>
                                        <input type="text" name="nombre" id="nombre1" class="form-control" maxlength="50" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label for="password" class="control-label">Contraseña:</label>
                                        <input type="password" name="password" id="password" class="form-control" maxlength="20" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <!--Select Multiple Tags -->
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label for="educacaion">Educación:</label>
                                        <select name="educacion" id="educacaion" class="select-with-search form-control pmd-select2" required>
                                            <option></option>
                                            <option value="primaria">Primaria</option>
                                            <option value="secundaria">Secundaria</option>
                                            <option value="tecnico">Tecnico</option>
                                            <option value="tecnologico">Tecnologico</option>
                                            <option value="profesional">Profesional</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-2 form-group pmd-textfield form-group-lg">
                                    <label for="nacionalidad" class="control-label">Nacionalidad:</label>
                                </div>
                                <div class="col-lg-10">
                                    <!--Inline Radio button-->
                                    <input type="radio" name="nacionalidad" id="nacionalidad1" value="colombiano" required>
                                    <span for="nacionalidad1">Colombiano&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input type="radio" name="nacionalidad" id="nacionalidad2" value="otra">
                                    <span for="nacionalidad1">Otra</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-2 form-group pmd-textfield form-group-lg">
                                    <label for="idiomas" class="control-label">Idiomas:</label>
                                </div>
                                <div class="col-lg-10 form-group btn-group checkbox-group required">
                                    <!--Inline checkboxes-->
                                    <!-- <label class="checkbox-inline pmd-checkbox pmd-checkbox-ripple-effect required"> -->
                                    <input type="checkbox" name="idiomas[]" id="idiomas" value="Español" required autofocus>
                                    <span for="español">&nbsp;&nbsp;Español&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <!-- </label> -->
                                    <!-- <label class="checkbox-inline pmd-checkbox pmd-checkbox-ripple-effect required"> -->
                                    <input type="checkbox" name="idiomas[]" id="idiomas" value="Ingles" required>
                                    <span for="ingles">&nbsp;&nbsp;Ingles &nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <!-- </label> -->
                                    <!-- <label class="checkbox-inline pmd-checkbox pmd-checkbox-ripple-effect required"> -->
                                    <input type="checkbox" name="idiomas[]" id="idiomas" value="Frances" required>
                                    <span for="frances">&nbsp;&nbsp;Frances &nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <!-- </label> -->
                                    <!-- <label class="checkbox-inline pmd-checkbox pmd-checkbox-ripple-effect required"> -->
                                    <input type="checkbox" name="idiomas[]" id="idiomas" value="Aleman" required>
                                    <span for="aleman">&nbsp;&nbsp;Aleman</span>
                                    <!-- </label> -->
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label for="email" class="control-label">Email:</label>
                                        <input type="email" name="email" id="email" class="form-control" maxlength="50" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label for="sitioweb" class="control-label">Sitio Web:</label>
                                        <input type="url" name="sitioweb" id="sitioweb" class="form-control" maxlength="150" required>
                                    </div>
                                </div>
                            </div>

                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <ul>
                                            <li>item1</li>
                                            <li>item2</li>
                                            <li>item3</li>
                                            <li>item4</li>
                                            <li>item5</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-2">
                                    <label for="file">Archivos Subir</label>
                                </div>
                                <div class="col-lg-2">
                                    <input type="file" name="archivos[]" id="archivos" multiple="" required>
                                </div>
                            </div>


                            <!-- <div class="UppyForm">
                                <form action="//api2.transloadit.com">
                                    <h5>Uppy was not loaded — slow connection, unsupported browser, weird JS error on a page
                                        — but upload still works, because HTML is cool like that</h5>
                                    <input type="file" name="files[]" multiple="">
                                    <button type="submit">Fallback Form Upload</button>
                                </form>
                            </div> -->


                            <div class="row">
                                <div class="col-lg-3">
                                </div>
                                <div class="col-lg-9">
                                    <input class="btn pmd-btn-outline pmd-ripple-effect btn-success" type="submit" value="Enviar">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>


    <script language="javascript" src="https://propeller.in/assets/js/propeller.min.js" type="text/javascript"></script>
    <script language="javascript" src="https://propeller.in/components/datetimepicker/js/moment-with-locales.js" type="text/javascript"></script>
    <script language="javascript" src="https://propeller.in/components/datetimepicker/js/bootstrap-datetimepicker.js" type="text/javascript"></script>

    <script>
        $(function () {

            var requiredCheckboxes = $(':checkbox[required]');

            requiredCheckboxes.change(function () {

                if (requiredCheckboxes.is(':checked')) {
                    requiredCheckboxes.removeAttr('required');
                } else {
                    requiredCheckboxes.attr('required', 'required');
                }
            });

        });
    </script>

    <script src="https://transloadit.edgly.net/releases/uppy/v0.23.2/dist/uppy.min.js"></script>
    <script>
        var uppy = Uppy.Core({
            autoProceed: false
        });
        uppy.use(Uppy.DragDrop, {
            target: '#drag-drop-area'
        });
        uppy.use(Uppy.Tus, {
            endpoint: 'https://master.tus.io/files/'
        });
        uppy.run()
    </script>

    <script>
        const Uppy = require('uppy/lib/core/Core');
        const FileInput = require('uppy/lib/plugins/FileInput');
        const XHRUpload = require('uppy/lib/plugins/XHRUpload');
        const ProgressBar = require('uppy/lib/plugins/ProgressBar');

        const uppy = new Uppy({
            debug: true,
            autoProceed: true
        });
        uppy.use(FileInput, {
            target: '.UppyForm',
            replaceTargetContent: true
        });
        uppy.use(XHRUpload, {
            endpoint: '//api2.transloadit.com',
            formData: true,
            fieldName: 'files[]'
        });
        uppy.use(ProgressBar, {
            target: 'body',
            fixed: true,
            hideAfterFinish: false
        });
        uppy.run();

        console.log('Uppy with Formtag and XHRUpload is loaded')
    </script>

    <!--javascript for sidebar component-->
    <script type="text/javascript" src="https://propeller.in/assets/js/propeller.js"></script>

    <!-- Propeller textfield js -->
    <script type="text/javascript" src="http://propeller.in/components/textfield/js/textfield.js"></script>

    <!-- Select2 js-->
    <script type="text/javascript" src="http://propeller.in/components/select2/js/select2.full.js"></script>

    <!-- Propeller Select2 -->
    <script type="text/javascript">
        $(document).ready(function () {

            <!-- Selectbox with search -->
            $(".select-with-search").select2({
                theme: "bootstrap"
            });

        });
    </script>
    <script type="text/javascript" src="http://propeller.in/components/select2/js/pmd-select2.js"></script>

    <!-- Propeller radio js -->
    <script type="text/javascript" src="http://propeller.in/components/radio/js/radio.js"></script>

    <!--prism code previewer -->
    <script type="text/javascript" src="https://propeller.in/docs/js/prism.js"></script>
    <script type="text/javascript" src="https://propeller.in/docs/js/prism-line-numbers.js"></script>
    <script type="text/javascript" src="https://propeller.in/docs/js/prism-toolbar.js"></script>
    <script>
        (function () {
            if (typeof self === 'undefined' || !self.Prism || !self.document) {
                return;
            }
            if (!Prism.plugins.toolbar) {
                console.warn('Copy to Clipboard plugin loaded before Toolbar plugin.');
                return;
            }
            var Clipboard = window.Clipboard || undefined;
            var _nativeClipboard;
            try {
                // Try using something ClipboardJS-specific
                new Clipboard('').destroy();
            } catch (e) {
                // Existing Clipboard variable is not ClipboardJS.
                // Store it so we can restore it later.
                _nativeClipboard = Clipboard;
                Clipboard = undefined;
            }
            if (!Clipboard && typeof require === 'function') {
                Clipboard = require('clipboard');
                if (_nativeClipboard) {
                    window.Clipboard = _nativeClipboard;
                }
            }

            var callbacks = [];

            if (!Clipboard) {
                var script = document.createElement('script');
                var head = document.querySelector('head');
                script.onload = function () {
                    Clipboard = window.Clipboard;
                    if (_nativeClipboard) {
                        window.Clipboard = _nativeClipboard;
                    }
                    if (Clipboard) {
                        while (callbacks.length) {
                            callbacks.pop()();
                        }
                    }
                };
                script.src = 'https://propeller.in/docs/js/clipboard.min.js';
                head.appendChild(script);
            }

            Prism.plugins.toolbar.registerButton('copy-to-clipboard', function (env) {
                var linkCopy = document.createElement('a');
                linkCopy.textContent = 'Copy';

                if (!Clipboard) {
                    callbacks.push(registerClipboard);
                } else {
                    registerClipboard();
                }

                return linkCopy;

                function registerClipboard() {
                    var clip = new Clipboard(linkCopy, {
                        'text': function () {
                            return env.code;
                        }
                    });

                    clip.on('success', function () {
                        linkCopy.textContent = 'Copied';

                        resetText();
                    });
                    clip.on('error', function () {
                        linkCopy.textContent = 'Press Ctrl+C to copy';

                        resetText();
                    });
                }

                function resetText() {
                    setTimeout(function () {
                        linkCopy.textContent = 'Copy';
                    }, 700);
                }
            });
        })();
    </script>
    <script type="text/javascript" src="https://propeller.in/docs/custom_js/jquery.validate.js"></script>
    <script type="text/javascript" src="https://propeller.in/docs/custom_js/component.js"></script>
    <script type="text/javascript" src="https://propeller.in/docs/custom_js/custom-analytic.js"></script>

    <!--Toggle hide and show for code view button -->
    <script type="text/javascript">
        <!-- Code box hide function on window load -->
        $('.code-box').hide();

        $('a.rotate-90 .material-icons').on('click', function () {
            $(this).closest('.pmd-card-title').parent().find('.code-box').slideToggle(400);
            $('.pmd-tabs').pmdTab();
        });
    </script>

    <!-- Javascript for page scroll for guideline page -->
    <script>
        $(document).ready(function () {
            $('.list-group a[href*=#]:not([href=#])').click(function () {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                    location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top - 100
                        }, 1000);
                        return false;
                    }
                }
            });
        });
    </script>

    <!-- Javascript for download button not closed-->
    <script>
        //$('ul.dropdown-menu.mega-dropdown-menu').on('click', function(event){
        //		event.stopPropagation();
        //	});
    </script>

    <!--Open relative dropdown on window load -->
    <script>
        $(document).ready(function () {
            $(".default-open").click();
        });
    </script>

    <!--Click on Search result jumto page -->
    <script>
        $(".sidebar-search-select").on("select2:open", function (e) {
            $("body > .select2-container").addClass("sidebar-search-select");
        });

        $(".sidebar-search-select").on("select2:select", function (e) {
            window.location.replace($(this).val());
        });
    </script>

    <!--Sidebar Search  -->
    <script src="https://propeller.in/docs/js/lunr.min.js"></script>
    <script src="https://propeller.in/docs/js/search.js"></script>

    <!--Chat service plugin -->
    <script>
        ((window.gitter = {}).chat = {}).options = {
            room: 'Propeller-Material-Design-Bootstrap-Framework/Support'
        };
    </script>
    <script src="https://sidecar.gitter.im/dist/sidecar.v1.js" async="" defer=""></script>

    <!--email subscription custom js-->
    <script type="text/javascript">
        $(document).ready(function () {
            // check if any checkbox checked then show subscription box
            $(".standalone-list-dialog .pmd-checkbox input").on("change", function () {
                if ($("#component_subcription").length) {
                    if ($(".standalone-list-dialog .pmd-checkbox input:checkbox:checked").length >
                        0) {
                        $("#component_subcription").slideDown();
                    } else {
                        $("#component_subcription").slideUp();
                    }
                }
            });

            // jQuery Validation
            $("#signup").validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    }
                },
                messages: {
                    email: {
                        required: "Please enter your email to begin download.",
                        email: "Please enter a valid email address."
                    }
                },
                highlight: function (element) {
                    $(element).closest('div.form-group').addClass("has-error");
                },
                unhighlight: function (element) {
                    $(element).closest('div.form-group').removeClass("has-error");
                },
                errorPlacement: function (error, element) {
                    $(element).closest('div.form-group').append(error);
                },

                submitHandler: function (form) {
                    $.ajax({
                        type: "POST",
                        url: 'https://propeller.in/email-subscribe/',
                        data: $(form).serializeArray(),
                        async: false,
                        success: function (statusdata) {
                            $("#general_loading").hide();
                            var responseObj = jQuery.parseJSON(statusdata);

                            if (responseObj.status == 'success') {
                                //responseObj.msg //message from server side
                                var attrVal = $('.custom-btn').attr(
                                    'data-formsubmit');
                                if (attrVal == "true") {
                                    $('#component_form').submit();
                                    $(".subscription-dialog").modal('hide');
                                    $('.custom-btn').attr('type', 'submit');
                                    $('.custom-btn').removeAttr('data-target');
                                } else {

                                    $('.download_anchor').removeAttr('data-target');
                                    setHref();
                                    $(".subscription-dialog").modal('hide');
                                    // $('.email_field_container').remove();

                                    $(".component_from_div").removeClass("hidden");
                                    $("#component_subcription").remove();

                                }
                                $('.download_anchor').removeAttr('data-target');
                                setHref();
                                $(".subscription-dialog").modal('hide');
                                // $('.email_field_container').remove();

                                $(".component_from_div").removeClass("hidden");
                                $("#component_subcription").remove();
                                if (typeof responseObj.downloadfile != 'undefined' &&
                                    responseObj.downloadfile != '') {
                                    //window.open(responseObj.downloadfile);
                                    window.location.href = responseObj.downloadfile;
                                }
                            } else {
                                //responseObj.msg //message from server side
                                alert(responseObj.msg);
                            }
                            setTimeout(function () {
                                $('#email_notification').get(18000).reset();
                                $('.response-message').hide();
                            }, 2000);
                            //console.log(responseObj.msg);

                        }, //success
                        error: function (jqXHR, textStatus, errorThrown) {

                        } //error
                    }); //$.ajax
                    /*$.post("subscribe.php", { fname: $("#fname").val(), lname: $("#lname").val(), email: $("#email").val() }, function(data) {
                        $('#response').html(data);
                    });*/
                }
            });


            $("#component_subcription").validate({
                rules: {
                    email_list: {
                        required: true,
                        email: true
                    }
                },
                messages: {
                    email_list: {
                        required: "Please enter your email to begin download.",
                        email: "Please enter a valid email address."
                    }
                },
                highlight: function (element) {
                    $(element).closest('div.form-group').addClass("has-error");
                },
                unhighlight: function (element) {
                    $(element).closest('div.form-group').removeClass("has-error");
                },
                errorPlacement: function (error, element) {
                    $(element).closest('div.form-group').append(error);
                },
                submitHandler: function (form) {
                    $.ajax({
                        type: "POST",
                        url: 'https://propeller.in/email-subscribe/',
                        data: $(form).serializeArray(),
                        async: false,
                        success: function (statusdata) {
                            $("#general_loading").hide();
                            var responseObj = jQuery.parseJSON(statusdata);

                            if (responseObj.status == 'success') {
                                //responseObj.msg //message from server side
                                $('.download_anchor').removeAttr('data-target');
                                setHref();
                                //$(".subscription-dialog").modal('hide');
                                $('.email_field_container').remove();

                                $(".component_from_div").removeClass("hidden");
                                //$("#component_form").submit();
                                $(".component_from_btn").click();
                                $("#component_subcription").remove();

                                if (typeof responseObj.downloadfile != 'undefined' &&
                                    responseObj.downloadfile != '') {
                                    //window.open(responseObj.downloadfile);
                                    window.location.href = responseObj.downloadfile;
                                }
                            } else {
                                alert(responseObj.msg);
                            }
                            setTimeout(function () {
                                $('#email_notification').get(18000).reset();
                                $('.response-message').hide();
                            }, 2000);
                        } //success
                    }); //$.ajax
                }
            });

        });

        function setDownloadLink(thisData) {
            $this = $(thisData);
            $(".file_to_download").val($this.data('href'));
        }

        function setHref() {
            $(".download_anchor").each(function (index) {
                $(this).attr('href', $(this).data('href'));
            });
        }
    </script>

</body>

</html>
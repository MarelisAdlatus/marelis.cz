import './bootstrap';

import Swal from 'sweetalert2';
import GLightbox from 'glightbox';

const lightbox = GLightbox({
    zoomable: true,
    touchNavigation: true,
    loop: false,
    autoplayVideos: true
});

import Zoomist from 'zoomist';
import Papa from 'papaparse';
import ApexCharts from 'apexcharts';
import { ApexChartsLocales } from './locales';

import '@google/model-viewer';

import SunEditor from 'suneditor';
import SunEditorPlugins from 'suneditor/src/plugins';
import SunEditorLang from 'suneditor/src/lang';

import Pako from 'pako';
import { Base64 } from 'js-base64';

import { ReportFormLocales } from './locales';

/* active link */
$('body').on('click', function (event) {
    $('.active-link').removeClass('active');
    if ($(event.target).is('.active-link')) {
        $(event.target).addClass('active');
    }
});

/* external link */
$('.external-link').on('click', function(event) {
    event.preventDefault();
    var self = this;
    var nameAttr = $(self).attr('name');
    var linkAttr = $(self).attr('href');
    var langAttr = $(self).attr('lang');
    // request a QR code image
    $.ajax({
        url: '/qrcode/text',
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        },
        data: {
            format: 'svg',
            size: '120',
            margin: '0',
            encoding: 'UTF-8',
            text: btoa(linkAttr),
        },
        success: function(data) {
            $('#external-link-message-qrcode').html(data);
        }
    });
    var locales = {
        "en": {
            "message": "Go to",
            "error_title": "Oops...",
            "error_text": "Please allow popups for this website!",
            "error_footer": "Why do I have this issue?",
            "error_footer_link": "https://www.google.com/search?q=allow+popups+for+the+website",
            "cancel_button": "Cancel",
            "confirm_button": "Open",
        },
        "cs": {
            "message": "Jít na",
            "error_title": "Jejda...",
            "error_text": "Povolte prosím vyskakovací okna pro tento web!",
            "error_footer": "Proč mám tento problém?",
            "error_footer_link": "https://www.google.com/search?q=povolit+vyskakovací+okna+pro+webové+stránky",
            "cancel_button": "Zrušit",
            "confirm_button": "Otevřít",
        }
    };
    Swal.fire({
        title: locales[langAttr]['message'] + ' ' + nameAttr + ' ?',
        html: '<div id="external-link-message-qrcode">'
        // temporary spinner
        + '<img src="data:image/svg+xml;base64,'
        + '77u/PHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHZpZXdCb3g9JzAgMCAyMDAgMjAwJz48Y2lyY2xlIGZpbGw9JyM2Qzc1N0QnIHN0cm9rZT0nIzZDNzU'
        + '3RCcgc3Ryb2tlLXdpZHRoPScxNScgcj0nMTUnIGN4PSc0MCcgY3k9JzEwMCc+PGFuaW1hdGUgYXR0cmlidXRlTmFtZT0nb3BhY2l0eScgY2FsY01vZGU9J3NwbGluZScgZHVyPS'
        + 'cyJyB2YWx1ZXM9JzE7MDsxOycga2V5U3BsaW5lcz0nLjUgMCAuNSAxOy41IDAgLjUgMScgcmVwZWF0Q291bnQ9J2luZGVmaW5pdGUnIGJlZ2luPSctLjQnPjwvYW5pbWF0ZT48L'
        + '2NpcmNsZT48Y2lyY2xlIGZpbGw9JyM2Qzc1N0QnIHN0cm9rZT0nIzZDNzU3RCcgc3Ryb2tlLXdpZHRoPScxNScgcj0nMTUnIGN4PScxMDAnIGN5PScxMDAnPjxhbmltYXRlIGF0'
        + 'dHJpYnV0ZU5hbWU9J29wYWNpdHknIGNhbGNNb2RlPSdzcGxpbmUnIGR1cj0nMicgdmFsdWVzPScxOzA7MTsnIGtleVNwbGluZXM9Jy41IDAgLjUgMTsuNSAwIC41IDEnIHJlcGV'
        + 'hdENvdW50PSdpbmRlZmluaXRlJyBiZWdpbj0nLS4yJz48L2FuaW1hdGU+PC9jaXJjbGU+PGNpcmNsZSBmaWxsPScjNkM3NTdEJyBzdHJva2U9JyM2Qzc1N0QnIHN0cm9rZS13aW'
        + 'R0aD0nMTUnIHI9JzE1JyBjeD0nMTYwJyBjeT0nMTAwJz48YW5pbWF0ZSBhdHRyaWJ1dGVOYW1lPSdvcGFjaXR5JyBjYWxjTW9kZT0nc3BsaW5lJyBkdXI9JzInIHZhbHVlcz0nM'
        + 'TswOzE7JyBrZXlTcGxpbmVzPScuNSAwIC41IDE7LjUgMCAuNSAxJyByZXBlYXRDb3VudD0naW5kZWZpbml0ZScgYmVnaW49JzAnPjwvYW5pbWF0ZT48L2NpcmNsZT48L3N2Zz4="'
        + ' width="120" height="120"></div><br />'
        + '<a href="' + linkAttr + '" target="_blank">' + linkAttr + '</a>',
        showCancelButton: true,
        cancelButtonText: locales[langAttr]['cancel_button'],
        showConfirmButton: true,
        confirmButtonText: locales[langAttr]['confirm_button']
    }).then((result) => {
        if (result.isConfirmed) {
            var win = window.open(linkAttr, '_blank');
            if (win) {
                win.focus();
            } else {
                Swal.fire({
                    icon: 'error',
                    title: locales[langAttr]['error_title'],
                    text: locales[langAttr]['error_text'],
                    footer: '<a href="' + locales[langAttr]['error_footer_link'] + '" target="_blank">' + locales[langAttr]['error_footer'] + '</a>'
                });
            }
        }
    });
});

/* contact form */
$('#modal-contact-form').on('hidden.bs.modal', function() { 
    // modal reset
    $(this).find('form').trigger('reset');
    // clear errors
    $(this).find('input,textarea').removeClass('is-invalid');
    $(this).find('[role="alert"]').html('');
}) ;
$('#contact-form').on('submit', function(event) {
    event.preventDefault();
    var self = this;
    var langAttr = $(self).attr('lang');
    var locales = {
        "en": {
            "message": "Thank you for your message, we will contact you soon!",
            "confirm_button": "Close",
        },
        "cs": {
            "message": "Děkujeme za vaši zprávu, brzy se vám ozveme!",
            "confirm_button": "Zavřít",
        }
    };
    // submit
    $.ajax({
        url: '/contact',
        type: 'POST',
        data: $(self).serialize(),
        success: function() {
            Swal.fire({
                text: locales[langAttr]['message'],
                icon: "success",
                confirmButtonText: locales[langAttr]['confirm_button']
            }).then((result) => {
                $('#modal-contact-form').modal('hide');
            });
        },
        error: function(xhr, status, error) {
            // there was an error
            var json = (xhr.responseJSON) ? xhr.responseJSON : JSON.parse(xhr.responseText);
            if (json.errors) {
                if (json.errors.name) {
                    $('#inputName').addClass('is-invalid');
                    $('#errorName').html(json.errors.name[0]);
                } else {
                    $('#inputName').removeClass('is-invalid');
                    $('#errorName').html('');
                }
                if (json.errors.email) {
                    $('#inputEmail').addClass('is-invalid');
                    $('#errorEmail').html(json.errors.email[0]);
                } else {
                    $('#inputEmail').removeClass('is-invalid');
                    $('#errorEmail').html('');
                }
                if (json.errors.phone) {
                    $('#inputPhone').addClass('is-invalid');
                    $('#errorPhone').html(json.errors.phone[0]);
                } else {
                    $('#inputPhone').removeClass('is-invalid');
                    $('#errorPhone').html('');
                }
                if (json.errors.message) {
                    $('#inputMessage').addClass('is-invalid');
                    $('#errorMessage').html(json.errors.message[0]);
                } else {
                    $('#inputMessage').removeClass('is-invalid');
                    $('#errorMessage').html('');
                }
            }
        }        
    });
});

/* wysiwyg editors */
var wysiwygEditor = [];
$('.wysiwyg-editor').each(function() {
    var self = this;
    var langAttr = $(self).attr('lang');
    wysiwygEditor[self.id] = SunEditor.create(self.id, {
        plugins: SunEditorPlugins,
        width: 'auto',
        height: 200,
        buttonList: [
            [
            'undo', 'redo', 'font', 'fontSize', 'formatBlock', 'paragraphStyle', 'blockquote',
            'bold', 'underline', 'italic', 'strike', 'subscript', 'superscript',
            'fontColor', 'hiliteColor', 'textStyle', 'removeFormat',
            'outdent', 'indent', 'align', 'horizontalRule', 'list', 'lineHeight',
            'table', 'link', 'image', 'fullScreen', 'showBlocks',
            ]
        ],
        lang: SunEditorLang[langAttr]
    });
});

/* report form */
$('#report-form').on('submit', function(event) {
    event.preventDefault();
    var self = this;
    var langAttr = $(self).attr('lang');
    var u8a = Pako.deflate(wysiwygEditor['input-message'].getContents());
    var b64encoded = Base64.fromUint8Array(u8a);
    // submit
    var formData = $(self).serializeArray();
    formData.push({name: 'message', value: b64encoded});
    $.ajax({
        url: '/report',
        type: 'POST',
        data: formData,
        success: function() {
            Swal.fire({
                text: ReportFormLocales[langAttr]['message'],
                confirmButtonText: ReportFormLocales[langAttr]['confirm_button'],
                icon: "success"
            });
        },
        error: function(xhr, status, error) {
            // there was an error
            var json = (xhr.responseJSON) ? xhr.responseJSON : JSON.parse(xhr.responseText);
            if (json.errors) {
                if (json.errors.name) {
                    $('#input-name').addClass('is-invalid');
                    $('#error-name').html(json.errors.name[0]);
                } else {
                    $('#input-name').removeClass('is-invalid');
                    $('#error-name').html('');
                }
                if (json.errors.email) {
                    $('#input-email').addClass('is-invalid');
                    $('#error-email').html(json.errors.email[0]);
                } else {
                    $('#input-email').removeClass('is-invalid');
                    $('#error-email').html('');
                }
                if (json.errors.message) {
                    $('#input-message-border').addClass('border border-danger');
                    $('#error-message').html(json.errors.message[0]);
                } else {
                    $('#input-message-border').removeClass('border border-danger');
                    $('#error-message').html('');
                }
            }
        }        
    });
});

$(document).ready(function() {

    /* zoomist container */
    $('.zoomist-container').each(function () {
        var self = this;
        var scaleAttr = $(self).attr('scale');
        new Zoomist(self, {
            maxScale: scaleAttr,
            slider: true,
            zoomer: true
        });
    });

    /* csv table */
    $('.csv-table').each(function () {
        var self = this;
        var pathAttr = $(self).attr('path');
        Papa.parse(pathAttr,
        {
            download: true,
            skipEmptyLines: true,
            complete: function(results) {
                var tab = '';
                // header
                var tab = '<thead>';
                tab += '<tr>';
                for (var k = 0; k < results.data[0].length; k++) {
                    tab += '<th class="ps-4 pe-4">' + results.data[0][k] + '</th>';
                }
                tab += '</tr>';
                tab += '</thead>';
                // body
                tab += '<tbody>';
                for (var j = 1; j < results.data.length; j++) {
                    tab += '<tr>';
                    for (var k = 0; k < results.data[j].length; k++) {
                        if (results.data[j][k].length < 10) {
                            tab += '<td class="ps-4 pe-4">' + results.data[j][k] + '</td>';
                        } else {
                            tab += '<td class="ps-4 pe-4 text-break">' + results.data[j][k] + '</td>';
                        }
                    }
                    tab += '</tr>';
                }
                tab += '</tbody>';
                $(self).append(tab);
            }
        });
    });

    /* download table */
    $('.download-table').each(function () {
        var self = this;
        var pathAttr = $(self).attr('path');
        $.ajax({
            url: '/download/list',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            data: {
                path: pathAttr,
            },
            success: function(data) {
                var tab = '';
                // header
                var tab = '<thead>';
                tab += '<tr>';
                tab += '<th class="ps-4 pe-4">' + data[0]['name'] + '</th>';
                tab += '<th class="ps-4 pe-4 text-center">' + data[0]['size'] + '</th>';
                tab += '<th class="ps-4 pe-4 text-center">' + data[0]['url'] + '</th>';
                tab += '</tr>';
                tab += '</thead>';
                // body
                tab += '<tbody>';
                for (var j = 1; j < data.length; j++) {
                    tab += '<tr>';
                    tab += '<td class="ps-4 pe-4">' + data[j]['name'] + '</td>';
                    tab += '<td class="ps-4 pe-4 text-center">' + data[j]['size'] + '</td>';
                    tab += '<td class="ps-4 pe-4 text-center">'
                        + '<a class="btn btn-primary" role="button" href="' + data[j]['url']
                        + '" title="' + data[j]['name']
                        + '" download><i class="bi bi-download"></i></a></td>';
                    tab += '</tr>';
                }
                tab += '</tbody>';
                $(self).append(tab);
            },
            error: function(data) {
                console.log(data);
            }
        });
    });

    /* plantuml diagram */
    $('.plantuml-diagram').each(function () {
        var self = this;
        var linkAttr = $(self).attr('path');
        $.ajax({
            url: '/plantuml/file',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            data: {
                format: 'svg',
                path: linkAttr,
            },
            success: function(data) {
                $(self).html(data);
            }
        });
    });

    /* apex charts */
    $('.apex-charts').each(function () {
        var self = this;
        var linkAttr = $(self).attr('path');
        var langAttr = $(self).attr('lang');
        $.getJSON(linkAttr, function(data) {
            var options = data;
            options['chart']['locales'] = ApexChartsLocales;
            options['chart']['defaultLocale'] = langAttr;
            var chart = new ApexCharts(self, options);
            chart.render();
        });
    });
});

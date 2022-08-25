
var color_codes = [
    "#63b598", "#ce7d78", "#ea9e70", "#a48a9e", "#c6e1e8", "#648177" ,"#0d5ac1" ,
    "#f205e6" ,"#1c0365", "#14a9ad", "#4ca2f9", "#a4e43f" ,"#d298e2" ,"#6119d0",
    "#d2737d" ,"#c0a43c", "#f2510e", "#651be6", "#79806e" ,"#61da5e" ,"#cd2f00" ,
    "#9348af" ,"#01ac53", "#c5a4fb", "#996635", "#b11573" ,"#4bb473" ,"#75d89e" ,
    "#2f3f94" ,"#2f7b99", "#da967d", "#34891f", "#b0d87b" ,"#ca4751" ,"#7e50a8" ,
    "#c4d647" ,"#e0eeb8", "#11dec1", "#289812", "#566ca0" ,"#ffdbe1" ,"#2f1179" ,
    "#935b6d" ,"#916988", "#513d98", "#aead3a", "#9e6d71", "#4b5bdc", "#0cd36d",
    "#250662", "#cb5bea", "#228916", "#ac3e1b", "#df514a", "#539397", "#880977",
    "#f697c1", "#ba96ce", "#679c9d", "#c6c42c", "#5d2c52", "#48b41b", "#e1cf3b",
    "#5be4f0", "#57c4d8", "#a4d17a", "#225b8",  "#be608b", "#96b00c", "#088baf",
    "#f158bf", "#e145ba", "#ee91e3", "#05d371", "#5426e0", "#4834d0", "#802234",
    "#6749e8", "#0971f0", "#8fb413", "#b2b4f0", "#c3c89d", "#c9a941", "#41d158",
    "#fb21a3", "#51aed9", "#5bb32d", "#807fb",  "#21538e", "#89d534", "#d36647",
    "#7fb411", "#0023b8", "#3b8c2a", "#986b53", "#f50422", "#983f7a", "#ea24a3",
    "#79352c", "#521250", "#c79ed2", "#d6dd92", "#e33e52", "#b2be57", "#fa06ec",
    "#1bb699", "#6b2e5f", "#64820f", "#1c271",  "#21538e", "#89d534", "#d36647",
    "#7fb411", "#0023b8", "#3b8c2a", "#986b53", "#f50422", "#983f7a", "#ea24a3",
    "#79352c", "#521250", "#c79ed2", "#d6dd92", "#e33e52", "#b2be57", "#fa06ec",
    "#1bb699", "#6b2e5f", "#64820f", "#1c271", "#9cb64a", "#996c48", "#9ab9b7",
    "#06e052", "#e3a481", "#0eb621", "#fc458e", "#b2db15", "#aa226d", "#792ed8",
    "#73872a", "#520d3a", "#cefcb8", "#a5b3d9", "#7d1d85", "#c4fd57", "#f1ae16",
    "#8fe22a", "#ef6e3c", "#243eeb", "#1dc18", "#dd93fd", "#3f8473", "#e7dbce",
    "#421f79", "#7a3d93", "#635f6d", "#93f2d7", "#9b5c2a", "#15b9ee", "#0f5997",
    "#409188", "#911e20", "#1350ce", "#10e5b1", "#fff4d7", "#cb2582", "#ce00be",
    "#32d5d6", "#17232", "#608572", "#c79bc2", "#00f87c", "#77772a", "#6995ba",
    "#fc6b57", "#f07815", "#8fd883", "#060e27", "#96e591", "#21d52e", "#d00043",
    "#b47162", "#1ec227", "#4f0f6f", "#1d1d58", "#947002", "#bde052", "#e08c56",
    "#28fcfd", "#bb09b", "#36486a", "#d02e29", "#1ae6db", "#3e464c", "#a84a8f",
    "#911e7e", "#3f16d9", "#0f525f", "#ac7c0a", "#b4c086", "#c9d730", "#30cc49",
    "#3d6751", "#fb4c03", "#640fc1", "#62c03e", "#d3493a", "#88aa0b", "#406df9",
    "#615af0", "#4be47", "#2a3434", "#4a543f", "#79bca0", "#a8b8d4", "#00efd4",
    "#7ad236", "#7260d8", "#1deaa7", "#06f43a", "#823c59", "#e3d94c", "#dc1c06",
    "#f53b2a", "#b46238", "#2dfff6", "#a82b89", "#1a8011", "#436a9f", "#1a806a",
    "#4cf09d", "#c188a2", "#67eb4b", "#b308d3", "#fc7e41", "#af3101", "#ff065",
    "#71b1f4", "#a2f8a5", "#e23dd0", "#d3486d", "#00f7f9", "#474893", "#3cec35",
    "#1c65cb", "#5d1d0c", "#2d7d2a", "#ff3420", "#5cdd87", "#a259a4", "#e4ac44",
    "#1bede6", "#8798a4", "#d7790f", "#b2c24f", "#de73c2", "#d70a9c", "#25b67",
    "#88e9b8", "#c2b0e2", "#86e98f", "#ae90e2", "#1a806b", "#436a9e", "#0ec0ff",
    "#f812b3", "#b17fc9", "#8d6c2f", "#d3277a", "#2ca1ae", "#9685eb", "#8a96c6",
    "#dba2e6", "#76fc1b", "#608fa4", "#20f6ba", "#07d7f6", "#dce77a", "#77ecca"
];


function genrate_code(string) {
    var matches = string.match(/\b(\w)/g);
    var code = matches.join('');
    return code;
}


$(window).scroll(function () {
    /*console.log($(window).scrollTop())*/
    if ($(window).scrollTop() > 20) {
        $('#sticky-bar').addClass('action_bar_fixed');
        $('#sticky-bar').find('#action_bar').addClass('action_bar pr-3');
    }
    if ($(window).scrollTop() < 20) {
        $('#sticky-bar').removeClass('action_bar_fixed');
        $('#sticky-bar').find('#action_bar').removeClass('action_bar pr-3');
    }
    /*if ($(window).scrollTop() >= ($(document).height() - $(window).height())*0.5){
        // Load more data
        console.log('Load more data');
        table.page.loadMore();
    }*/
});

// Date Picker Format
$('.pickadate').pickadate({
    format: 'yyyy-m-d',
});


/*Image Uploader*/
$(document).ready(function() {
    if (window.File && window.FileList && window.FileReader) {
        $("#files").on("change", function(e) {
            var files = e.target.files,
                filesLength = files.length;
            for (var i = 0; i < filesLength; i++) {
                var f = files[i]
                var fileReader = new FileReader();
                fileReader.onload = (function(e) {
                    var file = e.target;
                    $("<span class=\"pip\">" +
                        "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                        "<br/><span class=\"remove\"><i class=\"text-danger feather icon-trash\"></i></span>" +
                        "</span>").insertAfter("#files");
                    $(".remove").click(function(){
                        $(this).parent(".pip").remove();
                    });

                });
                fileReader.readAsDataURL(f);
            }
        });
    } else {
        alert("Your browser doesn't support to File API");
    }

    

});


// remove all front-end errors on form submit
function remove_errors_on_submit(get_class){
    $(get_class).removeClass('is-invalid');
    $(get_class).next('.error').remove();
    $(get_class).after('');
}

// reset form 
function reset_form(form_id){
    $(form_id).each(function(){
        $(this).find(':input').val("").change()
    });
}

// toastr showing at bottom 
toastr.options = {
    "positionClass": "toast-bottom-right",
}

// reload datatable and clear search form
$('#clear').on("click", function () { 
    $('#clear').closest('form').find(':input').val("").change()
    $('#clear').closest('form').find(':input').val("").change()
    $('.data-list-view').DataTable().ajax.reload()
});

// on press enter click submit button with class save button
$(document).on('keypress',function(e) {
    if(e.which == 13) {
        $('.click_submit_button_on_keypress').click();
    }
});

$('input[type=text][disabled]').addClass('readonly_css');
$('input[type=text][readonly]').addClass('readonly_css');
$('input[type=number][disabled]').addClass('readonly_css');
$('input[type=number][readonly]').addClass('readonly_css');
$('select:disabled').addClass('readonly_css');

function remove_disabled_readonly(){
    $('input[type=text]').prop("disabled", false); 
    $('input[type=text]').prop('readonly', false);
    $('input[type=text]').removeClass('readonly_css');

    $('input[type=number]').prop("disabled", false); 
    $('input[type=number]').prop('readonly', false);
    $('input[type=number]').removeClass('readonly_css');

    $('select:disabled').prop("disabled", false); 
    $('select:disabled').removeClass('readonly_css');
}

function remove_disabled_readonly_by_class(class_name){
    $(class_name).prop("disabled", false); 
    $(class_name).prop('readonly', false);
    $(class_name).removeClass('readonly_css');
}


// pass class or id with value e.g: value = $('.class_name').val(); validate_form('.class_name', value);
function validate_form(id_class, value){
    if (!value || value == "Choose...") {
        $(id_class).addClass('is-invalid');
        $(id_class).next('.error').remove();
        if($(id_class).siblings(".select2-container").length == 0) {
            $(id_class).after('<small class="text-danger error">Field is Required</small>');
        }else{
            $(id_class).siblings(".select2-container").next('.error').remove();
            $(id_class).siblings(".select2-container").after('<small class="text-danger error">Field is Required</small>');
        }
        $(id_class).focus();
        return false;
    }
    else{
        $(id_class).removeClass('is-invalid');
        $(id_class).next('.error').remove();
        $(id_class).siblings(".select2-container").next('.error').remove();
        return true;
    }
}


// pass class or id with value e.g: value = $(thisV).find('.class_name').val(); validate_this_form('.class_name', thisV, value);
function validate_this_form(id_class, thisV, value){
    if (!value) {
        $(thisV).find(id_class).addClass('is-invalid');
        $(thisV).find(id_class).next('.error').remove();
        if($(thisV).find(id_class).siblings(".select2-container").length == 0) {
            $(thisV).find(id_class).after('<small class="text-danger error">Field is Required</small>');
        }else{
            $(thisV).find(id_class).siblings(".select2-container").after('<small class="text-danger error">Field is Required</small>');
        }
        $(thisV).find(id_class).focus();
        return false;
    }
    else{
        $(thisV).find(id_class).removeClass('is-invalid');
        $(thisV).find(id_class).next('.error').remove();
        $(thisV).find(id_class).siblings(".select2-container").next('.error').remove();
        return true;
    }
}

$('.readonly_css').siblings('span').find('.select2-selection__rendered').addClass('select2_readonly_css');
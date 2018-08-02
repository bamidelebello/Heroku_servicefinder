
var up = false;


function returnScroll(count) {   
    if (count >= 40) {
        return true;
    } else {
        return false;
    }
}



// fixed header conditions
$(document).scroll(function() {
    var scrollCount = $(this).scrollTop();
    var url = location.href;
    // var url = "file:///Users/olayinka/Downloads/Web%20pages/Service-Finder/index.html";
    // console.log(url);
    if (url.includes("index")) {
        // console.log('true');
        if (scrollCount >= 40) {
            $('.nav-header').css({
                'position': 'fixed',
                'top': '0'
            });
            if(window.matchMedia("(min-width: 768px)").matches) {
                $('.home-section').css({
                    'margin-top': '98px'
                });
            }

        } else {
            $('.nav-header').css({
                'position': 'relative'
            });
            $('.home-section').css({
                'margin-top': '0px'
            });
        }
    } else {
        // console.log('false');
    }

    if(scrollCount <= 200) {
        $('#scrollUp').fadeOut();
    } else {
        $('#scrollUp').fadeIn();
    }

});



// Mobile - view nav dropdown conditions
$('.dropdown-toggle').dropdown();
$('#toggle-mobile-nav').click(function() {
    var scrollCount = $(document).scrollTop();
    if (up == false) {
        $('.mobile-nav').slideDown(300, function() {
            if(scrollCount >= 40) {
                $('.home-section').css({
                    'margin-top': '0px'
                });
                $('.mobile-nav').css({
                    'margin-top': '0px',
                    'margin-bottom': '0px'
                });
            } else {
                $('.home-section').css({
                    'margin-top': '0px'
                });
                $('.mobile-nav').css({
                    'margin-top': '0px',
                    'margin-bottom': '0px'
                });
            }
        });
        up = true;
    } else {
        $('.mobile-nav').slideUp(300, function() {
            if(scrollCount >= 40) {
                $('.home-section').css({
                    'margin-top': '98px'
                });
            } else {
                $('.home-section').css({
                    'margin-top': '0px'
                });
            }
        });
        up = false;
    }
});


// How to use service finder section <--Homepage-->

$('.service-content1').mouseenter(function() {
    $('.first-service .divs').css({
        'padding-top': '0px'
    });
    $('.step-number1').css({
        'color': '#666666'
    });
});

$('.service-content1').mouseleave(function() {
    $('.divs').css({
        'padding-top': '15px'
    });
    $('.step-number1').css({
        'color': '#eaeaea'
    });
});

$('.service-content2').mouseenter(function() {
    $('.divs2').css({
        'padding-top': '0px'
    });
    $('.step-number2').css({
        'color': '#666666'
    });
});

$('.service-content2').mouseleave(function() {
    $('.divs2').css({
        'padding-top': '15px'
    });
    $('.step-number2').css({
        'color': '#eaeaea'
    });
});

$('.service-content3').mouseenter(function() {
    $('.first-service .divs3').css({
        'padding-top': '0px'
    });
    $('.step-number3').css({
        'color': '#666666'
    });
});

$('.service-content3').mouseleave(function() {
    $('.divs3').css({
        'padding-top': '15px'
    });
    $('.step-number3').css({
        'color': '#eaeaea'
    });
});




// Why use service finder section <--Homepage-->
$('.service-detail1').mouseenter(function() {
    $('.service-detail1 .rounded-icon').css({
        'background-color': '#3396d1',
        'color': '#fff'
    });
});

$('.service-detail1').mouseleave(function() {
    $('.service-detail1 .rounded-icon').css({
        'background-color': '#fff',
        'color': '#3396d1'
    });
});

// two

$('.service-detail2').mouseenter(function() {
    $('.service-detail2 .rounded-icon').css({
        'background-color': '#3396d1',
        'color': '#fff'
    });
});

$('.service-detail2').mouseleave(function() {
    $('.service-detail2 .rounded-icon').css({
        'background-color': '#fff',
        'color': '#3396d1'
    });
});

$('.service-detail3').mouseenter(function() {
    $('.service-detail3 .rounded-icon').css({
        'background-color': '#3396d1',
        'color': '#fff'
    });
});

$('.service-detail3').mouseleave(function() {
    $('.service-detail3 .rounded-icon').css({
        'background-color': '#fff',
        'color': '#3396d1'
    });
});

$('.service-detail4').mouseenter(function() {
    $('.service-detail4 .rounded-icon').css({
        'background-color': '#3396d1',
        'color': '#fff'
    });
});

$('.service-detail4').mouseleave(function() {
    $('.service-detail4 .rounded-icon').css({
        'background-color': '#fff',
        'color': '#3396d1'
    });
});

$('.service-detail5').mouseenter(function() {
    $('.service-detail5 .rounded-icon').css({
        'background-color': '#3396d1',
        'color': '#fff'
    });
});

$('.service-detail5').mouseleave(function() {
    $('.service-detail5 .rounded-icon').css({
        'background-color': '#fff',
        'color': '#3396d1'
    });
});

$('.service-detail6').mouseenter(function() {
    $('.service-detail6 .rounded-icon').css({
        'background-color': '#3396d1',
        'color': '#fff'
    });
});

$('.service-detail6').mouseleave(function() {
    $('.service-detail6 .rounded-icon').css({
        'background-color': '#fff',
        'color': '#3396d1'
    });
});


// Feautured providers section <-- Home Page -->
$('.featured-providers .owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
});

// What people are saying section <-- Home page -->
$('.testimony-carousel .owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:2
        }
    }
});

// Lazy loader for map <-- Home page -->
$('#map').ready(function() {
    var preloader = $('.map-loader');
    window.addEventListener('load', function() {
        $(preloader).css('display', 'none');
    });
});


// featured provider hide and show background color <-- Homepage -->
$('.provider-details').mouseenter(function() {
    var c = this.childNodes;

    $(c[1].childNodes[3]).css({
        'background-color': 'rgba(0, 0, 0, 0.5)'
    });

    $(c[1].childNodes[3].childNodes[1]).css('visibility', 'visible');
    $(c[1].childNodes[3].childNodes[3]).css('visibility', 'visible');
});


$('.provider-details').mouseleave(function() {
   var c = this.childNodes;

    $(c[1].childNodes[3]).css({
        'background-color': 'rgba(0, 0, 0, 0.0)'
    });

    $(c[1].childNodes[3].childNodes[1]).css('visibility', 'hidden');
    $(c[1].childNodes[3].childNodes[3]).css('visibility', 'hidden');
});






// Scroll top button <-- All pages  -->
$('#scrollUp').on("click",function(){
    $('html,body').animate({ scrollTop: 0 }, 1000, function () {});
});



// Map section <-- Home page -->
function initMap() {
    var uluru = {lat: 12.9716, lng: 77.5946};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 4,
        center: uluru
    });
        // var marker = new google.maps.Marker({
        //   position: uluru,
        //   map: map
        // });
}


// Company profile settings
// Company-Profile-settings scripts 
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
});


// Summernote Script
$(document).ready(function() {
    if ($('#summernote')) {
        $('#summernote').summernote(); 
        $('#summernote1').summernote();
        $('#summernote2').summernote();
    }
});

// 
$(document).scroll(function() {
    var scrollCounter = $(this).scrollTop();
    if (window.matchMedia("(max-width: 768px)").matches) {
        if (scrollCounter >= 1200) {
            $('#submit-button').css({'position': 'fixed', 'top': '10px'});
        } else {
            $('#submit-button').css('position', 'static');
        }
    } else {
        if (scrollCounter >= 250) {
            $('#submit-button').css({'position': 'fixed', 'top': '10px'});
        } else {
            $('#submit-button').css('position', 'static');
        }
    }
});

$(document).ready(function() {
    var preloader = $('.page-loader');
    window.addEventListener('load', function() {
        $(preloader).css('display', 'none');
    });
});



var profileImage = $('#profile-image');
$(document).ready(function() {
    if(profileImage.attr('src') != './Assets/Images/no_img.jpg') {
        $('.profile-image-container label').css('display', 'none');
        $('.profile-image-container').css({
            'border': 'none',
            'padding': '0px'
        });
        $(profileImage).css({
            'height': '150px',
            'width': '150px',
            'border-radius': '5px 0px 5px 5px'
        })
        $('.image-warning').css('margin-top', '10px');
        
        $('.profile-image-container').mouseenter(function() {
            $('.delete-profile-image').css('display', 'inline');
        });
         $('.profile-image-container').mouseleave(function() {
            $('.delete-profile-image').css('display', 'none');
        });
    }
});
$('.parmanently-delete').click(function() {
    profileImage.attr('src', './Assets/Images/no_img.jpg')
    // $('.company-image img').attr('src', profileImage.attr('src'));
    $('.profile-image-container label').css('display', 'block');
    $('.profile-image-container').css({
        'border': '1px dashed #ddd',
        'padding': '30px'
    });
    $(profileImage).css({
        'height': 'auto',
        'width': '100%',
        'border-radius': '0px'
    });

    $('.profile-image-container').mouseenter(function() {
        $('.delete-profile-image').css('display', 'none');
    });
    $('.profile-image-container').mouseleave(function() {
        $('.delete-profile-image').css('display', 'none');
    });
        // $('.image-warning').css('margin-top', '10px');
});


// Team member photo upload area
var teamMemberImage = $('.team-member-image img');
$(document).ready(function() {
    if (teamMemberImage.attr('src') != './Assets/Images/no_img.jpg') {
        $('.team-member-image label').css('display', 'none');
        $('.team-member-image span').css('display', 'inline');
        $('.team-member-image').css({
            'border': 'none',
            'padding': '0px'
        });

        $(teamMemberImage).css({
            'height': '150px',
            'width': '150px',
            'border-radius': '5px 0px 5px 5px'
        });

        $('.team-member-image').mouseenter(function() {
            $('.team-member-image span').css('display', 'inline');
        });
        $('.team-member-image').mouseleave(function() {
            $('.team-member-image span').css('display', 'none');
        });
    } 


    $('#choose-member-image').on('change', function(e) {
        var files = $(this)[0].files;
        if (files.length >= 2) {
            $('.team-member-image label').html('you have uploaded '+files.length+' files.');
        } else {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $(teamMemberImage).attr('src', reader.result);
                }
                reader.readAsDataURL(this.files[0]);
                teamMemberImageUpload();
            } 
        }
    });

});

$('.team-member-image span').click(function() {
    teamMemberImage.attr('src', './Assets/Images/no_img.jpg')
    // $('.company-image img').attr('src', profileImage.attr('src'));
    $('.team-member-image label').css('display', 'block');
    $('.team-member-image').css({
        'border': '1px dashed #ddd',
        'padding': '30px'
    });

    $(teamMemberImage).css({
        'height': 'auto',
        'width': '100%',
        'border-radius': '0px'
    });

    $('.team-member-image').mouseenter(function() {
        $('.team-member-image span').css('display', 'none');
    });
    $('.team-member-image').mouseleave(function() {
        $('.team-member-image span').css('display', 'none');
    });
});
// End of team member upload script

function teamMemberImageUpload() {
    $('.team-member-image label').css('display', 'none');
        $('.team-member-image span').css('display', 'inline');
        $('.team-member-image').css({
            'border': 'none',
            'padding': '0px'
        });

        $(teamMemberImage).css({
            'height': '150px',
            'width': '150px',
            'border-radius': '5px 0px 5px 5px'
        });

        $('.team-member-image').mouseenter(function() {
            $('.team-member-image span').css('display', 'inline');
        });
        $('.team-member-image').mouseleave(function() {
            $('.team-member-image span').css('display', 'none');
    });
}

function imageUpload() {
    $('.profile-image-container label').css('display', 'none');
    $('.profile-image-container').css({
        'border': 'none',
        'padding': '0px'
    });
    $(profileImage).css({
        'height': '150px',
        'width': '150px',
        'border-radius': '5px 0px 5px 5px'
    })
    $('.image-warning').css('margin-top', '10px');
        
    $('.profile-image-container').mouseenter(function() {
        $('.delete-profile-image').css('display', 'inline');
    });
    $('.profile-image-container').mouseleave(function() {
        $('.delete-profile-image').css('display', 'none');
    });
}


$(document).ready(function() {
    // Get the files uploaded
    $('#cover-photo').on('change', function(e) {
        var files = $(this)[0].files;
        if (files.length >= 2) {
            $('.cover-photo-label').html('you have uploaded '+files.length+' files.');
        } else {
            var fileName = e.target.value.split("\\").pop();
            $('.cover-photo-label').html(fileName);
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    // console.log(reader.result);
                    // $('.cover-photo-preview').css('background-image', 'url('+reader.result+')');
                    $('.cover-photo-preview img').attr('src', reader.result);
                }
                reader.readAsDataURL(this.files[0]);
                $('#cover-photo-zone').fadeOut(300);
                $('.cover-photo-preview').slideDown(400);
            } 
        }
    });


    $('#gallery-photo').on('change', function(e) {
        var files = $(this)[0].files;
        if (files.length >= 2) {
            $('.gallery-photo-label').html('you have uploaded '+files.length+' files.');
        } else {
            var fileName = e.target.value.split("\\").pop();
            $('.gallery-photo-label').html(fileName);
        }
    });

    $('#attachment-photo').on('change', function(e) {
        var files = $(this)[0].files;
        if (files.length >= 2) {
            $('.attachment-photo-label').html('you have uploaded '+files.length+' files.');
        } else {
            var fileName = e.target.value.split("\\").pop();
            $('.attachment-photo-label').html(fileName);
        }
    });

    $('#identity-file').on('change', function(e) {
        var files = $(this)[0].files;
        if (files.length >= 2) {
            $('.identity-file-label').html('you have uploaded '+files.length+' files.');
        } else {
            var fileName = e.target.value.split("\\").pop();
            $('.identity-file-label').html(fileName);
        }
    })


    // insert url in image tag
    $('#chooseImage').on('change', function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#profile-image').attr('src', reader.result);
            };
            reader.readAsDataURL(this.files[0]);
            imageUpload();
        }
    })
});

$('.cover-photo-preview span').click(function() {
    $('.cover-photo-preview img').attr('src', '');
    $('.cover-photo-label').html('Select Files');
    $('.cover-photo-preview').fadeOut(300);
    $('#cover-photo-zone').slideDown(300);
});

$('.company-settings-tab a').click(function(e) {
    e.preventDefault();
})

// category-select 
var radioArray = [];
$('.company-name-field select').on('change', function() {
    // var valueGetter = this.value;
    $('.radio-button').remove();
    var categoryDropdownLi = $('#select-radio-category .dropdown-menu.inner li');
    categoryDropdownLi.each(function (i, li) {
        var serviceCategory = $(li);
        if(serviceCategory.hasClass('selected')) {

            radioArray.push(this.childNodes[0].text);

            for(var i = 0; i < radioArray.length; i++) {
                var radioDiv = '<div class="radio-button"><input type="radio" id="provider-location" name="category-radio"><label>'+radioArray[i]+'</label></div>';
                
                $('.company-name-field .select-value-radios').append(radioDiv);
            }
            radioArray = [];
        }
    });
});



function validateURL(textval) {
    var urlregex = new RegExp( "^(http|https|ftp)\://([a-zA-Z0-9\.\-]+(\:[a-zA-Z0-9\.&amp;%\$\-]+)*@)*((25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9])\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[0-9])|([a-zA-Z0-9\-]+\.)*[a-zA-Z0-9\-]+\.(com|edu|gov|int|mil|net|org|biz|arpa|info|name|pro|aero|coop|museum|[a-zA-Z]{2}))(\:[0-9]+)*(/($|[a-zA-Z0-9\.\,\?\'\\\+&amp;%\$#\=~_\-]+))*$");
    return urlregex.test(textval);
}

$('#previewVideo').click(function(e) {
    e.preventDefault();
    var youtubeUrl = $('#video-url-textbox').val();
    console.log(youtubeUrl);
    if (youtubeUrl != '') {
        if (validateURL(youtubeUrl)) {
            console.log(youtubeUrl);
            if (youtubeUrl.indexOf("watch")) {
                // console.log('true');
                youtubeUrl = youtubeUrl.replace('watch?v=', 'embed/');
                console.log(youtubeUrl);
                $('.embedded-video-div iframe').attr('src', youtubeUrl);
                $('.embedded-video-div').slideDown(300);
            } else {
                $('.embedded-video-div iframe').attr('src', youtubeUrl);
                $('.embedded-video-div').slideDown(300);
            }
        } else {
            // console.log('incorrect');
        }
    } else {
        return;
    }
    
});

$('.hour-mode-switch input').on('change', function() {
    if($('.hour-mode-switch input').is(':checked')) {
        $('.bussiness-duration-form .dropdown-toggle').addClass('disabled');
    } else {
        // $('.bussiness-duration-form select').removeAttr('disabled');
        $('.bussiness-duration-form .dropdown-toggle').removeClass('disabled');
    }
});
$(document).ready(function() {
    if (window.matchMedia("(max-width: 768px)").matches) {
        $('table.table').addClass('table-bordered');
    } 
});


$('#submit-button').click(function(e) {
    e.preventDefault(); 
});

$('.add-video').click(function(e) {
    e.preventDefault(); 
});



// **************************** ..COmpany Profile.. ***************************//
$('.profile-page-gallery .owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
})

$('.profile-page-gallery .owl-carousel .item').mouseenter(function() {
    $(this.childNodes[3]).css('background-color', 'rgba(0, 0, 0, 0.5)');
    $(this.childNodes[3].childNodes[1]).slideDown(300);
});
$('.profile-page-gallery .owl-carousel .item').mouseleave(function() {
    $(this.childNodes[3]).css('background-color', 'rgba(0, 0, 0, 0.0)');
    $(this.childNodes[3].childNodes[1]).slideUp(100);
});



/*********** ....company profile page....... ************/
/************* ....company profile page....... *********** */
/************* ....company profile page....... *************/
/************* ....company profile page....... *************/

$(document).ready(function() {
    $('.map2').css('position', 'static');
});




var isServicePriceSelected = false;
var servicePriceSelectedCount = 0;
$('.each-service-price').click(function() {
    // console.log(this.childNodes);
    var child = this.childNodes
    if ($(child[1].childNodes[3]).attr('checked')) {
        $(child[5]).css('display', 'none');
        $(child[1].childNodes[3]).attr('checked', false);
        // isServicePriceSelected = false;
        servicePriceSelectedCount--;
        if (servicePriceSelectedCount > 0) {
            $('#task-location-tab .alert-danger').css('display', 'none');
        } else {
            $('#task-location-tab .alert-danger').css('display', 'block');
            $('#task-location-tab .alert-danger').html('Please select at least one service');
        }
    } else {
        $(child[5]).css('display', 'block');
        $(child[1].childNodes[3]).attr('checked', true);
        // isServicePriceSelected = true;
        servicePriceSelectedCount++;
        if (servicePriceSelectedCount > 0) {
            $('#task-location-tab .alert-danger').css('display', 'none');
        } else {
            $('#task-location-tab .alert-danger').css('display', 'block');
            $('#task-location-tab .alert-danger').html('Please select at least one service');
        }
    }
});



function validateFirstTab() {
    var locationInput = $('.location-input input').val().length;
    if (locationInput > 0 && servicePriceSelectedCount > 0) {
        $('.profile-booking-section .nav-tabs li a').prop( "disabled", false );
        $('#task-location-tab .alert-danger').css('display', 'none');
        return true;
    } else {
        if (servicePriceSelectedCount == 0) {

            $('#task-location-tab .alert-danger').css('display', 'block');
            $('#task-location-tab .alert-danger').html('Please select at least one service');

        } else {

            $('#task-location-tab .alert-danger').css('display', 'block');
            $('#task-location-tab .alert-danger').html('Please enter a location');    
        }
        
        $('.profile-booking-section .nav-tabs li a').prop( "disabled", true );
        return false;
    }
}


// Tab movement and progress bar
$('#task-location-next').click(function(e) {
    switch (validateFirstTab()) {
        case true:
            $('.your-date a').tab('show')
            progressBar(50);
            console.log('true');
            break;
        default:
            e.preventDefault();
    }
});

$('#customer-info-prev').click(function() {
    $('.your-date a').tab('show');
    progressBar(50);
});

$('#customer-info-next').click(function() {
    $('.payment-aspect a').tab('show');
    progressBar(100);
});


function progressBar(percent) {
    $('.profile-booking-section .booking-completion-percent div').css('width', percent + '%');
}

$('.task-location').click(function() {
    progressBar(25);
});
$('.your-date').click(function(e) {
    switch (validateFirstTab()) {
        case true:
            progressBar(50);
            break;
        default:
            e.preventDefault();
    } 
});
$('.customer-info').click(function(e) {
    switch (validateFirstTab()) {
        case true:
            progressBar(75);
            break;
        default:
            e.preventDefault();
    } 
});
$('.payment-aspect').click(function(e) {
    switch (validateFirstTab()) {
        case true:
            progressBar(100);
            break;
        default:
            e.preventDefault();
    } 
});


$('#choose-date-prev').click(function() {
    $('.task-location a').tab('show');
    progressBar(25);
});

$('#choose-date-next').click(function() {
    $('.customer-info a').tab('show');
    progressBar(75);
});

// Zabuto Scripts

$(document).ready(function () {
    $("#date-popover").popover();
    // ...

    $("#my-calendar").zabuto_calendar({
        today: true,
        action: function () {
            return myDateFunction(this.id, false);
        },
        action_nav: function () {
            return myNavFunction(this.id);
        },
        ajax: {
            url: "show_data.php?action=1",
            modal: true
        },
        legend: [
            {type: "text", label: "Special events", badge: "00"},
            {type: "block", label: "Regular event"}
        ]

    });
});

function myDateFunction(id, fromModal) {
    $("#date-popover").hide();
    if (fromModal) {
        $("#" + id + "_modal").modal("hide");
    }
    var date = $("#" + id).data("date");
    var hasEvent = $("#" + id).data("hasEvent");
    if (hasEvent && !fromModal) {
        return false;
    }
    $("#date-popover-content").html('You clicked on date ' + date);
    $("#date-popover").show();
    console.log(date);
    $('.calendar-dow td').css('background-color', '#fff');
    $('#'+id).css('background-color', '#dff0d8');
    return true;
}

function myNavFunction(id) {
    $("#date-popover").hide();
    var nav = $("#" + id).data("navigation");
    var to = $("#" + id).data("to");
    console.log('nav ' + nav + ' to:' + to.month + '/' + to.year);
}


$('.choose-member-section a').click(function(e) {
    e.preventDefault();

    $('.choose-member-section a .fa-check').css('display', 'none');
    $('.choose-member-section a img').css('height', '100px');

    $(this.childNodes[1]).css('height', '85px');
    $(this.childNodes[3]).css('display', 'block');
    // console.log(this.childNodes);
});




// $(document).ready(function() {
//     changeColor('#7a1ea1'); 

// });

// function changeColor(color) {

//     $('div').each(function(index, obj) {
//         if ($(obj).css('background-color') == 'rgb(51, 150, 209)') {
//             $(obj).css('background-color', color);
//         }
//         if ($(obj).css('border-color') == 'rgb(51, 150, 209)') {
//             $(obj).css('border-color', color);
//         }
//     });


//     $('a').each(function(index, obj) {
//         if ($(obj).css('color') == 'rgb(51, 150, 209)') {
//             $(obj).css('color', color);
//         }
//         if ($(obj).css('background-color') == 'rgb(51, 150, 209)') {
//             $(obj).css('background-color', color);
//         }
//     });

//     $('i').each(function(index, obj) {
//         if ($(obj).css('color') == 'rgb(51, 150, 209)') {
//             $(obj).css('color', color);
//         }
//     });

//     $('li').each(function(index, obj) {
//         if ($(obj).css('background-color') == 'rgb(51, 150, 209)') {
//             $(obj).css('background-color', color);
//         }
//     });

// }


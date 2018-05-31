//Actions elements visibility
$(function () {

    var addImage = $(".add-image"),
        addFbImage = $(".add-facebook-profile"),
        addText = $(".add-text"),
        layers = $(".layers"),
        image = $(".image"),
        fbimage = $(".fbimage"),
        text = $(".text");

    image.click(function () {
        $(this).addClass('active').attr('displayed', 'on');
        addImage.show();
        addFbImage.hide();
        addText.hide();
        layers.hide();
        fbimage.removeClass('active');
        text.removeClass('active');
    });

    fbimage.click(function () {
        $(this).addClass('active');
        addImage.hide();
        addFbImage.show();
        addText.hide();
        layers.hide();
        image.removeClass('active');
        text.removeClass('active');
    });

    text.click(function () {
        $(this).addClass('active').attr('displayed', 'on');
        addImage.hide();
        addFbImage.hide();
        addText.show();
        layers.hide();
        image.removeClass('active');
        fbimage.removeClass('active');
    });

    $(".layers-btn").click(function () {
        $(this).addClass('active');
        addImage.hide();
        addFbImage.hide();
        addText.hide();
        layers.show();
        image.removeClass('active');
        fbimage.removeClass('active');
        text.removeClass('active');
    });

        addFbImage.show();
        fbimage.addClass('active');

});

$(function () {
  $('.js-modal-open').on('click', function () {
    $('.js-modal').fadeIn();
    var getPart = $(this).attr('getPart');
    var getData = $(this).attr('getData');

    $('.modal_getPart').text(getPart);
    $('.modal_getData').text(getData);
    $('.modal_getPart').val(getPart);
    $('.modal_getData').val(getData);
  });

  $('.js-modal-close').on('click', function () {
    $('.js-modal').fadeOut();
    return false;
  });
});

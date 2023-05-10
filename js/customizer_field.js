// /* global wp, jQuery */
// /**
//  * File customizer_field.js.
//  *
//  * Theme Customizer enhancements for a better user experience.
//  *
//  * Contains handlers to make Theme Customizer preview reload changes asynchronously.
//  */
// ( function( $ ) {
//     // Add new portfolio item
//     $('#add-portfolio-item').on('click', function(e) {
//         e.preventDefault();
//         var itemHtml = '<div class="portfolio-item">' +
//             '<input type="text" name="portfolio_item_title[]" placeholder="Item Title" />' +
//             '<input type="text" name="portfolio_item_description[]" placeholder="Item Description" />' +
//             '<input type="text" name="portfolio_item_link[]" placeholder="Item Link" />' +
//             '<button class="remove-portfolio-item">Remove</button>' +
//             '</div>';
//         $('#portfolio-items-container').append(itemHtml);
//     });

//     // Remove portfolio item
//     $(document).on('click', '.remove-portfolio-item', function(e) {
//         e.preventDefault();
//         $(this).parent('.portfolio-item').remove();
//     });


// }( jQuery ) );
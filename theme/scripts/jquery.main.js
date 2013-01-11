jQuery.ias({
  container 	: ".listing",
  		// Enter the selector of the element containing
  		// your items that you want to paginate.

  item		: ".post",
		// Enter the selector of the element that each
		// item has. Make sure the elements are inside
		// the container element.

  pagination	: "#content .navigation",
		// Enter the selector of the element that contains
		// your regular pagination links, like next,
		// previous and the page numbers. This element
		// will be hidden when IAS loads.

  next		: ".next-posts a",
		// Enter the selector of the link element that
		// links to the next page. The href attribute
		// of this element will be used to get the items
		// from the next page.

  loader	: "images/loader.gif"
		// Enter the url to the loader image. This image
		// will be displayed when the next page with items
		// is loaded via AJAX.
});
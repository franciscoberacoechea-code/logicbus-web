var url;
function createPagination(pages, page) {

 // Obtiene los parámetros de la URL

    var url = new URL(window.location.href);

    if(!url.searchParams.has('pagina')){
    url.searchParams.append('pagina', '1');
  }





  let str = '<ul>';
  let active;
  let pageCutLow = page - 1;
  let pageCutHigh = page + 1;
  // Show the Previous button only if you are on a page other than the first  
  if (page > 1) {
    url.searchParams.set('pagina',(page-1));
    str += '<li class="page-item previous no"><a  href="'+url.search+'" onclick="loading(); createPagination(pages, '+(page-1)+')">Anterior</a></li>';
  }

  // Show all the pagination elements if there are less than 6 pages total   
  if (pages < 6) {
    for (let p = 1; p <= pages; p++) {
      active = page == p ? "active" : "no";
      url.searchParams.set('pagina',p);
      str += '<li class="'+active+'"><a  onclick="loading(); createPagination(pages, '+p+')" href="'+url.search+'">'+ p +'</a></li>';
    }
  }
  // Use "..." to collapse pages outside of a certain range
  else {
    // Show the very first page followed by a "..." at the beginning of the
    // pagination section (after the Previous button)
    if (page > 2) {
      url.searchParams.set('pagina',1);
      str += '<li class="no page-item"><a  href="'+url.search+'" onclick="loading(); createPagination(pages, 1)">1</a></li>';
      if (page > 3) {
        url.searchParams.set('pagina',(page-2));
          str += '<li class="out-of-range"><a href="'+url.search+'"   onclick="loading(); createPagination(pages,'+(page-2)+')">...</a></li>';
      }
    }
    // Determine how many pages to show after the current page index
    if (page === 1) {
      pageCutHigh += 2;
    } else if (page === 2) {
      pageCutHigh += 1;
    }
    // Determine how many pages to show before the current page index
    if (page === pages) {
      pageCutLow -= 2;
    } else if (page === pages-1) {
      pageCutLow -= 1;
    }
    // Output the indexes for pages that fall inside the range of pageCutLow
    // and pageCutHigh
    for (let p = pageCutLow; p <= pageCutHigh; p++) {
      if (p === 0) {
        p += 1;
      }
      if (p > pages) {
        continue
      }
      active = page == p ? "active" : "no";
      url.searchParams.set('pagina', p);
      str += '<li class="page-item '+active+'"><a  href="'+url.search+'" onclick="loading(); createPagination(pages, '+p+')">'+ p +'</a></li>';
    }
    // Show the very last page preceded by a "..." at the end of the pagination
    // section (before the Next button)
    if (page < pages-1) {
      if (page < pages-2) {
        url.searchParams.set('pagina',(page+2));
        str += '<li class="out-of-range"><a href="'+url.search+'" onclick="loading(); createPagination(pages,'+(page+2)+')">...</a></li>';
      }
      url.searchParams.set('pagina',pages);
      str += '<li class="page-item no"><a href="'+url.search+'" onclick="loading(); createPagination(pages, pages)">'+pages+'</a></li>';
    }
  }
  // Show the Next button only if you are on a page other than the last
  if (page < pages) {
    url.searchParams.set('pagina',(page+1));
    str += '<li class="page-item next no" ><a href="'+url.search+'" onclick="loading(); createPagination(pages, '+(page+1)+')">Proximo</a></li>';
  }
   str += '</ul>';
   str += '<div id="loading"  style=" display:none; "><span class="spinner-border role="status" aria-hidden="true" style="height: 30px; width:30px; "></span></div>';
 
  // Return the pagination string to be outputted in the pug templates
  document.getElementById('pagination').innerHTML = str;
  return str;
}

function loading(){
const myElement = document.getElementById("loading");
myElement.setAttribute('style', 'position:relative;  display: block;   color:var(--blue); bottom:100px; ');
}


document.addEventListener('contextmenu', function(e) {
  if (e.target.id !== 'finder' ) {
    if (e.target.id !== 'tags' ) {
   
  e.preventDefault();
  }}
});

document.addEventListener('dragstart', function(e) {
  e.preventDefault();
});
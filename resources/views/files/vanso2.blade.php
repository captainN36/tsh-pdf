<div id=content>
{!!$data['data']['yearIndicator']['nowYearIndicator']['content'] !!}
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
      paginateContent();
    });

    function paginateContent() {
      const content = document.getElementById('content');
      const contentHeight = content.offsetHeight;
      const pageHeight = 794;
      let currentPage = 1;

      while (currentPage * pageHeight < contentHeight) {
        const pdfPage = document.createElement('div');
        pdfPage.className = 'pf w0 h0';

        const clonedContent = content.cloneNode(true);
        pdfPage.appendChild(clonedContent);

        document.body.appendChild(pdfPage);

        content.style.marginTop = `-${currentPage * pageHeight}px`;
        currentPage++;
      }
    }
  </script>
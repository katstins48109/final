<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="html" indent="yes" encoding="UTF-8"/>
<xsl:template match="/">

<table class="bibliography">

   <caption>Recent Additions to the Catalog</caption>

   <thead>
      <tr>
         <th>Title</th>
         <th>Author</th>
         <th>Year</th>
         <th>Publisher</th>
      </tr>
   </thead>

   <tbody>

      <xsl:for-each select="bibliography/book">

         <tr>
            <td><xsl:value-of select="title"/></td>
            <td><xsl:value-of select="author"/></td>
            <td><xsl:value-of select="year"/></td>
            <td><xsl:value-of select="publisher"/></td>
         </tr>

      </xsl:for-each>

   </tbody>

   <tfoot>
      <tr>
         <td colspan="4" class="source">Source: <a href="https://kstinson.libib.com/" target="_blank">Snippet of Katie's Library</a></td>
      </tr>
   </tfoot>

</table>

</xsl:template>
</xsl:stylesheet>

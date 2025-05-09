<?xml version="1.0"?>
<xsl:stylesheet version="1.0" 
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:template match="/">
    <html>
      <body>
        <h2>Student Details</h2>
        <p>Name: <xsl:value-of select="student/name"/></p>
        <p>Age: <xsl:value-of select="student/age"/></p>
        <p>Course: <xsl:value-of select="student/course"/></p>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>

<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/students">
        <html>
        <body>
            <h1>Student Records</h1>
            <table border="1">
                <tr bgcolor="#9acd32">
                    <th>Name</th>
                    <th>Roll Number</th>
                    <th>Class</th>
                    <th>Section</th>
                </tr>
                <xsl:for-each select="student">
                    <tr>
                        <td><xsl:value-of select="name"/></td>
                        <td><xsl:value-of select="rollno"/></td>
                        <td><xsl:value-of select="class"/></td>
                        <td><xsl:value-of select="section"/></td>
                    </tr>
                </xsl:for-each>
            </table>
        </body>
        </html>
    </xsl:template>
</xsl:stylesheet>

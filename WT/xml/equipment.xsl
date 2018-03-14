<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <body>
  <h2>Equipment_info</h2>
  <table border="1">
    <tr bgcolor="#9acd32">
      <th>Equipment_Name</th>
      <th>Equipment_type</th>
      <th>Model_name</th>
	  <th>serial_number</th>
      <th>Description</th>
      <th>Availability</th>
	  <th>Condition</th>
      <tr>
       <th>name</th>
       <th>address</th>
       <th>phone</th>
       <th>email</th>
      </tr>
    </tr>
    <xsl:for-each select="Equipment_info/lab_equipment">
    <tr>
      <td><xsl:value-of select="Equipment_Name"/></td>
      <td><xsl:value-of select="Equipment_type"/></td>
      <td><xsl:value-of select="Model_name"/></td>
       <td><xsl:value-of select="serial_number"/></td>
       <td><xsl:value-of select="Description"/></td>
	   <td><xsl:value-of select="Availability"/></td>
	   <td><xsl:value-of select="Condition"/></td>
        </tr>
        <xsl:for-each select="Equipment_info/Contact_info">
        <tr>
        <td><xsl:value-of select="name"/></td>
       <td><xsl:value-of select="address"/></td>
       <td><xsl:value-of select="phone"/></td>
       <td><xsl:value-of select="email"/></td>
       </tr>
    </xsl:for-each>
  </table>
  </body>
  </html>
</xsl:template>

</xsl:stylesheet>
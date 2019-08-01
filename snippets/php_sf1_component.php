<snippet>
  <content><![CDATA[
php

/**
 * ${0}
 * 
 */

class '${1:${TM_FILENAME/(.+)\..+|.*/$1/:component_name}}'Component extends sfComponent
{
  /**
   * 
   */
  public function execute($request)
  {

  }
}
]]></content>
  <tabTrigger>component</tabTrigger>
  <scope>source.php</scope>
  <description>Symfony Component</description>
</snippet>
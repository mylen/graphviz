<?php 
namespace Mylen\GraphViz\Attributes;


/**
 * Set the shape of a node.
 * <table align="CENTER">
  <tbody><tr align="CENTER">
    <td><img src="http://www.graphviz.org/doc/info/box.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/polygon.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/ellipse.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/oval.gif">
  </td></tr>
  <tr align="CENTER">
    <td><a name="dbox">box</a>
    </td><td><a name="dpolygon">polygon</a>
    </td><td><a name="dellipse">ellipse</a>
    </td><td><a name="doval">oval</a>
  </td></tr>
  <tr align="CENTER">
    <td><img src="http://www.graphviz.org/doc/info/circle.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/point.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/egg.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/triangle.gif">
  </td></tr>
  <tr align="CENTER">
    <td><a name="dcircle">circle</a>
    </td><td><a name="dpoint">point</a>
    </td><td><a name="degg">egg</a>
    </td><td><a name="dtriangle">triangle</a>
  </td></tr>
  <tr align="CENTER">
    <td><img src="http://www.graphviz.org/doc/info/plaintext.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/diamond.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/trapezium.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/parallelogram.gif">
  </td></tr>
  <tr align="CENTER">
    <td><a name="dplaintext">plaintext</a>
    </td><td><a name="ddiamond">diamond</a>
    </td><td><a name="dtrapezium">trapezium</a>
    </td><td><a name="dparallelogram">parallelogram</a>
  </td></tr>
  <tr align="CENTER">
    <td><img src="http://www.graphviz.org/doc/info/house.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/pentagon.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/hexagon.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/septagon.gif">
  </td></tr>
  <tr align="CENTER">
    <td><a name="dhouse">house</a>
    </td><td><a name="dpentagon">pentagon</a>
    </td><td><a name="dhexagon">hexagon</a>
    </td><td><a name="dseptagon">septagon</a>
  </td></tr>
  <tr align="CENTER">
    <td><img src="http://www.graphviz.org/doc/info/octagon.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/doublecircle.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/doubleoctagon.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/tripleoctagon.gif">
  </td></tr>
  <tr align="CENTER">
    <td><a name="doctagon">octagon</a>
    </td><td><a name="ddoublecircle">doublecircle</a>
    </td><td><a name="ddoubleoctagon">doubleoctagon</a>
    </td><td><a name="dtripleoctagon">tripleoctagon</a>
  </td></tr>
  <tr align="CENTER">
    <td><img src="http://www.graphviz.org/doc/info/invtriangle.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/invtrapezium.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/invhouse.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/Mdiamond.gif">
  </td></tr>
  <tr align="CENTER">
    <td><a name="dinvtriangle">invtriangle</a>
    </td><td><a name="dinvtrapezium">invtrapezium</a>
    </td><td><a name="dinvhouse">invhouse</a>
    </td><td><a name="dMdiamond">Mdiamond</a>
  </td></tr>
  <tr align="CENTER">
    <td><img src="http://www.graphviz.org/doc/info/Msquare.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/Mcircle.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/rect.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/rectangle.gif">
  </td></tr>
  <tr align="CENTER">
    <td><a name="dMsquare">Msquare</a>
    </td><td><a name="dMcircle">Mcircle</a>
    </td><td><a name="drect">rect</a>
    </td><td><a name="drectangle">rectangle</a>
  </td></tr>
  <tr align="CENTER">
    <td><img src="http://www.graphviz.org/doc/info/square.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/none.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/note.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/tab.gif">
  </td></tr>
  <tr align="CENTER">
    <td><a name="dsquare">square</a>
    </td><td><a name="dnone">none</a>
    </td><td><a name="dnote">note</a>
    </td><td><a name="dtab">tab</a>
  </td></tr>
  <tr align="CENTER">
    <td><img src="http://www.graphviz.org/doc/info/folder.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/box3d.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/component.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/promoter.gif">
  </td></tr>
  <tr align="CENTER">
    <td><a name="dfolder">folder</a>
    </td><td><a name="dbox3d">box3d</a>
    </td><td><a name="dcomponent">component</a>
    </td><td><a name="dpromoter">promoter</a>
  </td></tr>
  <tr align="CENTER">
    <td><img src="http://www.graphviz.org/doc/info/cds.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/terminator.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/utr.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/primersite.gif">
  </td></tr>
  <tr align="CENTER">
    <td><a name="dcds">cds</a>
    </td><td><a name="dterminator">terminator</a>
    </td><td><a name="dutr">utr</a>
    </td><td><a name="dprimersite">primersite</a>
  </td></tr>
  <tr align="CENTER">
    <td><img src="http://www.graphviz.org/doc/info/restrictionsite.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/fivepoverhang.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/threepoverhang.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/noverhang.gif">
  </td></tr>
  <tr align="CENTER">
    <td><a name="drestrictionsite">restrictionsite</a>
    </td><td><a name="dfivepoverhang">fivepoverhang</a>
    </td><td><a name="dthreepoverhang">threepoverhang</a>
    </td><td><a name="dnoverhang">noverhang</a>
  </td></tr>
  <tr align="CENTER">
    <td><img src="http://www.graphviz.org/doc/info/assembly.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/signature.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/insulator.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/ribosite.gif">
  </td></tr>
  <tr align="CENTER">
    <td><a name="dassembly">assembly</a>
    </td><td><a name="dsignature">signature</a>
    </td><td><a name="dinsulator">insulator</a>
    </td><td><a name="dribosite">ribosite</a>
  </td></tr>
  <tr align="CENTER">
    <td><img src="http://www.graphviz.org/doc/info/rnastab.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/proteasesite.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/proteinstab.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/rpromoter.gif">
  </td></tr>
  <tr align="CENTER">
    <td><a name="drnastab">rnastab</a>
    </td><td><a name="dproteasesite">proteasesite</a>
    </td><td><a name="dproteinstab">proteinstab</a>
    </td><td><a name="drpromoter">rpromoter</a>
  </td></tr>
  <tr align="CENTER">
    <td><img src="http://www.graphviz.org/doc/info/rarrow.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/larrow.gif">
    </td><td><img src="http://www.graphviz.org/doc/info/lpromoter.gif">
  </td></tr>
  <tr align="CENTER">
    <td><a name="drarrow">rarrow</a>
    </td><td><a name="dlarrow">larrow</a>
    </td><td><a name="dlpromoter">lpromoter</a>
  </td></tr>
</tbody></table>
 */
class Shape extends AbstractAttributes
{                
    
    protected $name = "shape";
}

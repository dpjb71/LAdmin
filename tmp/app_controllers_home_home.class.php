<?php
namespace Detroit\Controllers;

/**
 * Description of logme
 *
 * @author david
 */

 class Home extends \Phoenix\Web\UI\TControl {
    //put your code here

    protected $dummy;
    protected $grid0;


    <div class="row-fluid">
        <div class="span3">


        </div>
        <div class="span9">
    <!-- Modal
    ================================================== -->
            <section id="modals">
            <div class="page-header">
                &nbsp;
            </div>

            <div>
                <?php $this->dummy->render(); ?>
            </div>
                <table>
                <tr>
                    <td width="50%">
                        <div id="dataGrid" >
                            <div id="grid">
                                <?php $this->grid0->render(); ?>
                            </div>
                            <?php $this->pager->render(); ?>
                        </div>
                    </td>
                    <td width="50%">
                        <div id="vikipedia">
                            
                        </div>
                    </td>
                </tr>
                </table>
            </div>
                
            <div id="token">

            </div>


            </section>

        </div>
    </div>
</div>

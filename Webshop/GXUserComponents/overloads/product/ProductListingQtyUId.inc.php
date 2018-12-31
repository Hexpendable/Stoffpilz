<?php

class ProductListingQtyUId extends ProductListingQtyUId_parent
{
    function buildDataArray(&$array, $image = 'thumbnail')
    {
        $t_data_array = parent::buildDataArray($array,$image);

        $product_QtyU_id = $this->get_product_QtyU_id($array['products_id'],$_SESSION['language_id']);

        $t_data_array['QTYU_ID'] = $product_QtyU_id['quantity_unit_id'];

        return $t_data_array;
    }


    function get_product_QtyU_id($products_id,$language_id)
    {
        $t_query = 'SELECT
                        q.products_id,
                        q.quantity_unit_id
                    FROM
                        products_quantity_unit q
                    WHERE
                        q.products_id = "' . (int)$products_id . '"';
        $t_result = xtc_db_query($t_query);
        if(xtc_db_num_rows($t_result) > 0)
        {
            return xtc_db_fetch_array($t_result);
        }
    }
}
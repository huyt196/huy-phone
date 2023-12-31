<div class="widget">
    <h5 class="widget_title">Mức giá</h5>
    <div class="filter_price">
        <div id="price_filter" data-min="50000" data-max="10000000" data-min-value="50000" data-max-value="10000000" data-price-sign="đ"></div>
        <div class="price_range">
            <span>Giá từ:<span id="flt_price"></span></span>
            <input type="hidden" id="price_first" name="price_first" value="<?=$this->arrParam['price_first']?>">
            <input type="hidden" id="price_second" name="price_second" value="<?=$this->arrParam['price_second']?>">
            <input type="hidden" id="left" name="left" value="<?=$this->arrParam['left']?>">
            <input type="hidden" id="right" name="right" value="<?=$this->arrParam['right']?>">
            <input type="button" class="btn btn-sm btn-success mt-3 d-block" value="Áp dụng" id="btnSubmitPrice"/>
        </div>
    </div>
</div>
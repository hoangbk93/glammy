
<h3><strong>Thông tin khách hàng mua sản phẩm</strong></h3>
<div>
	<div>
        <label>Địa chỉ Email:</label>
        {{ $info['email'] }}
    </div>
    <div>
        <label>Họ & Tên:</label>
        {{ $info['name'] }}
    </div>
    <div >
        <label>Số điện thoại:</label>
        {{ $info['phone'] }}
    </div>
    <div >
        <label>Địa chỉ nhận hàng:</label>
        {{ $info['address'] }}
    </div>
    <table>
    	<tr>
    		<td>Sẩn phẩm</td>
    		<td>Giá sẩn phẩm</td>
    		<td>Số lượng</td>
    		<td>Thành tiền</td>
    	</tr>
    	@foreach($cart as $item)
    	<tr>
    		<td>{{ $item->name }}</td>
    		<td>${{ $item->price }}.00</td>
    		<td>{{ $item->qty }}</td>
    		<td>${{ $item->price*$item->qty }}.00</td>
    	</tr>
    	@endforeach
    	<tr>
    		<td>Tổng tiền</td>
    		<td colspan="3">${{ $total }}.00</td>
    	</tr>
    </table>
    <div id="xac-nhan">
		<br>
		<p align="justify">
			<b>Quý khách đã đặt hàng thành công!</b><br />
			• Sản phẩm của Quý khách sẽ được chuyển đến Địa chỉ có trong phần Thông tin Khách hàng của chúng Tôi sau thời gian 2 đến 3 ngày, tính từ thời điểm này.<br />
			• Nhân viên giao hàng sẽ liên hệ với Quý khách qua Số Điện thoại trước khi giao hàng 24 tiếng.<br />
			<b><br />Cám ơn Quý khách đã sử dụng Sản phẩm của Công ty chúng Tôi!</b>
		</p>
	</div>
</div>

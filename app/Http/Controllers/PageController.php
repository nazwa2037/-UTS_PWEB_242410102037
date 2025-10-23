<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private function data(): array
    {
        return [
            ['id'=>1,'nama'=>'White Orchids', 'harga'=>200000,'stok'=>10,'img'=>'https://asset.bloomnation.com/c_pad,d_vendor:global:catalog:product:image.png,f_auto,fl_preserve_transparency,q_auto/v1737584553/vendor/6157/catalog/product/2/0/20240110015553_file_659ea1e9a28b9_65a2c1977435a.jpeg'],
            ['id'=>2,'nama'=>'Pink Seasonal', 'harga'=>250000,'stok'=>5,'img'=>'https://www.sonningflowers.com/wp-content/uploads/2016/06/Pretty-in-Pink-Option-1-1024_compress51.jpg'],
            ['id'=>3,'nama'=>'Daisy Dreams', 'harga'=>220000,'stok'=>2,'img'=>'https://www.valleyflowers.ca/cdn/shop/products/Solid_Daisies_2000x2231.jpg?v=1571726791'],
            ['id'=>4,'nama'=>'Red Roses', 'harga'=>180000,'stok'=>25,'img'=>'https://asset.bloomnation.com/c_pad,d_vendor:global:catalog:product:image.png,f_auto,fl_preserve_transparency,q_auto/v1702361370/vendor/9502/catalog/product/2/0/20190115115103_file_5c3e71e7a30c1_657787ccd643f.jpg'],
            ['id'=>5,'nama'=>'Oriental Lilies', 'harga'=>350000,'stok'=>7,'img'=>'https://www.tamworthflorist.com.au/wp-content/uploads/2019/05/476075436_1152091639779066_5377776056638512448_n.jpg'],
            ['id'=>6,'nama'=>'Bright Gerberas', 'harga'=>250000,'stok'=>12,'img'=>'https://www.1800giftportal.com/media/catalog/product/cache/1/image/0dc2d03fe217f8c83829496872af24a0/u/s/usfl1803.jpg'],
        ];
    }

    public function login()
    {
        return view('login');
    }

    public function doLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $validUser = 'nazwa';
        $validPass = 'nazwa123';

        if ($username === $validUser && $password === $validPass) {
            return redirect()->route('dashboard', ['username' => $username]);
        }
        return redirect()->back()->with('error', 'Username atau password salah!');
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');
        $orders = [
            ['no' => '1','customer' => 'Sinta','items' => 'White Orchids (1)','total' => 200000, 'time' => '09:45'],
            ['no' => '2','customer' => 'Anggi','items' => 'Oriental Lilies (1)','total' => 350000, 'time' => '11:20'],
            ['no' => '3','customer' => 'Mei','items' => 'Pink Seasonal (1)','total' => 250000, 'time' => '16.34'],
        ];

        return view('dashboard', compact('username', 'orders'));
    }

    public function pengelolaan()
    {
        $items = $this->data();
        return view('pengelolaan', ['items' => $items]);
    }

    public function profile()
    {
        return view('profile');
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rentalcontroller extends CI_Controller
{
    function _construct()
    {
        parent:: _construct();
        #loads the cart library and calls the cart model
        $this->load->library('cart');
        $this->load->model('billing_model');
    }

    public function index()
    {
        $this->load->library('cart');
        $this->load->model('billing_model');
        #gets all the data from the database
        $data['products'] = $this->billing_model->get_all();
        //send all product data to "car_view", which fetch from database.
        $this->load->view('car_view', $data);
    }

    function add()
    {
        $this->load->library('cart');
        # Set array for send data.
        $insert_data = array(
            'id' => $this->input->post('id'),
            'name' => $this->input->post('name'),
            'price' => $this->input->post('price'),
            'qty' => 1
        );
        #This function add items into cart.
        $this->cart->insert($insert_data);

        #This will show insert data in cart.
        redirect('Rentalcontroller');
    }

    function remove($rowid)
    {
        $this->load->library('cart');
        #Check rowid value.
        if ($rowid === "all") {
            #Destroy data which store in session.
            $this->cart->destroy();
        } else {
            #Destroy selected rowid in session.
            $data = array(
                'rowid' => $rowid,
                'qty' => 0
            );
            #Update cart data, after cancel.
            $this->cart->update($data);
        }
        #This will show canceled data in cart.
        redirect('Rentalcontroller');
    }

    function update_cart()
    {
        $this->load->library('cart');
        #Recieve post values,calculate them and update
        $cart_info = $_POST['cart'];
        foreach ($cart_info as $id => $cart) {
            $rowid = $cart['rowid'];
            $price = $cart['price'];
            $amount = $price * $cart['qty'];
            $qty = $cart['qty'];

            $data = array(
                'rowid' => $rowid,
                'price' => $price,
                'amount' => $amount,
                'qty' => $qty
            );

            $this->cart->update($data);
        }
        redirect('Rentalcontroller');
    }

    function billing_view()
    {
        $this->load->library('cart');
        #Load "billing_view".
        $this->load->view('billing_view');
    }

    public function save_order()
    {
        $this->load->library('cart');
        #This will store all values which inserted from user.
        $customer = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'phone' => $this->input->post('phone')
        );
        #And store user information in database.
        $customer_id = $this->billing_model->insert_customer($customer);

        $order = array(
            'date' => date('Y-m-d'),
            'customerid' => $customer_id
        );

        $ord_id = $this->billing_model->insert_order($order);

        if ($cart = $this->cart->contents()):
            foreach ($cart as $item):
                $order_detail = array(
                    'orderid' => $ord_id,
                    'productid' => $item['id'],
                    'quantity' => $item['qty'],
                    'price' => $item['price']
                );
                #Insert product information with order detail, store in cart also store in database.

                $cust_id = $this->billing_model->insert_order_detail($order_detail);
            endforeach;
        endif;
        // After storing all information in database load "billing_success".
        $this->load->view('billing_success');
    }
}

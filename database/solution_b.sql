/* 
1. Liệt kê các hóa đơn của khách hàng, thông tin hiển thị gồm: mã user, tên user, mã
hóa đơn
*/
SELECT o.user_id, u.user_name, o.order_id 
FROM orders AS o
JOIN users AS u ON o.user_id = u.user_id

/*
2. Liệt kê số lượng các hóa đơn của khách hàng: mã user, tên user, số đơn hàng
*/
SELECT o.user_id, u.user_name, 
    COUNT(o.order_id) AS TotalOrders
FROM orders AS o
JOIN users AS u ON o.user_id = u.user_id
GROUP BY o.user_id, u.user_name

/*
3. Liệt kê thông tin hóa đơn: mã đơn hàng, số sản phẩm
*/
SELECT o.order_id, 
    COUNT(od.product_id) AS TotalProducts
FROM orders AS o
JOIN order_details AS od ON o.order_id = od.order_id
GROUP BY o.order_id

/*
4. Liệt kê thông tin mua hàng của người dùng: mã user, tên user, mã đơn hàng, tên sản
phẩm. Lưu ý: gôm nhóm theo đơn hàng, tránh hiển thị xen kẻ các đơn hàng với nhau
*/
SELECT o.user_id, u.user_name, o.order_id,
    GROUP_CONCAT(p.product_name ORDER BY p.product_name ASC SEPARATOR ', ') AS ProductList
FROM orders AS o
JOIN users AS u ON o.user_id = u.user_id
JOIN order_details AS od ON o.order_id = od.order_id
JOIN products AS p ON od.product_id = p.product_id
GROUP BY o.user_id, u.user_name, o.order_id
ORDER BY o.order_id

/*
5. Liệt kê 7 người dùng có số lượng đơn hàng nhiều nhất, thông tin hiển thị gồm: mã
user, tên user, số lượng đơn hàng
*/
SELECT o.user_id, u.user_name, 
    COUNT(o.order_id) AS TotalOrders
FROM orders AS o
JOIN users AS u ON o.user_id = u.user_id
GROUP BY o.user_id, u.user_name
ORDER BY TotalOrders DESC
LIMIT 7

/*
6. Liệt kê 7 người dùng mua sản phẩm có tên: Samsung hoặc Apple trong tên sản
phẩm, thông tin hiển thị gồm: mã user, tên user, mã đơn hàng, tên sản phẩm
*/
SELECT o.user_id, u.user_name, o.order_id, p.product_name
FROM orders AS o
JOIN users AS u ON o.user_id = u.user_id
JOIN order_details AS od ON o.order_id = od.order_id
JOIN products AS p ON od.product_id = p.product_id
WHERE p.product_name LIKE '%Samsung%' OR p.product_name LIKE '%Apple%'
LIMIT 7

/*
7. Liệt kê danh sách mua hàng của user bao gồm giá tiền của mỗi đơn hàng, thông tin
hiển thị gồm: mã user, tên user, mã đơn hàng, tổng tiền
*/
SELECT o.user_id, u.user_name, o.order_id, 
    SUM(p.product_price) AS TotalPrices
FROM orders AS o
JOIN users AS u ON o.user_id = u.user_id
JOIN order_details AS od ON o.order_id = od.order_id
JOIN products AS p ON od.product_id = p.product_id
GROUP BY o.user_id, u.user_name, o.order_id
ORDER BY o.order_id ASC

/*
8. Liệt kê danh sách mua hàng của user bao gồm giá tiền của mỗi đơn hàng, thông tin
hiển thị gồm: mã user, tên user, mã đơn hàng, tổng tiền. Mỗi user chỉ chọn ra 1 đơn
hàng có giá tiền lớn nhất. 
*/

SELECT o.user_id, u.user_name, o.order_id, 
    SUM(p.product_price) AS TotalPrices
FROM orders AS o
JOIN users AS u ON o.user_id = u.user_id
JOIN order_details AS od ON o.order_id = od.order_id
JOIN products AS p ON od.product_id = p.product_id
GROUP BY o.user_id, u.user_name, O.order_id
ORDER BY o.order_id ASC


/*
9. Liệt kê danh sách mua hàng của user bao gồm giá tiền của mỗi đơn hàng, thông tin
hiển thị gồm: mã user, tên user, mã đơn hàng, tổng tiền, số sản phẩm. Mỗi user chỉ
chọn ra 1 đơn hàng có giá tiền nhỏ nhất. 
*/

SELECT o.user_id, u.user_name, o.order_id, 
    SUM(p.product_price) AS TotalPrices,
    COUNT(p.product_id) AS TotalProducts
FROM orders AS o
JOIN users AS u ON o.user_id = u.user_id
JOIN order_details AS od ON o.order_id = od.order_id
JOIN products AS p ON od.product_id = p.product_id
WHERE o.order_id = (
    SELECT o2.order_id
    FROM orders as o2
    JOIN order_details AS od2 ON o2.order_id = od2.order_id
    JOIN products AS p2 ON od2.product_id = p2.product_id
    WHERE o2.user_id = o.user_id
    GROUP BY o2.order_id
    ORDER BY SUM(p2.product_price) ASC
    LIMIT 1
)
GROUP BY o.user_id, u.user_name, o.order_id


/*
10. Liệt kê danh sách mua hàng của user bao gồm giá tiền của mỗi đơn hàng, thông tin
hiển thị gồm: mã user, tên user, mã đơn hàng, tổng tiền, số sản phẩm. Mỗi user chỉ
chọn ra 1 đơn hàng có số sản phẩm là nhiều nhất.
*/


SELECT o.user_id, u.user_name, o.order_id, 
    SUM(p.product_price) AS TotalPrices,
    COUNT(p.product_id) AS TotalProducts
FROM orders AS o
JOIN users AS u ON o.user_id = u.user_id
JOIN order_details AS od ON o.order_id = od.order_id
JOIN products AS p ON od.product_id = p.product_id
WHERE o.order_id = (
    SELECT o2.order_id
    FROM orders as o2
    JOIN order_details AS od2 ON o2.order_id = od2.order_id
    JOIN products AS p2 ON od2.product_id = p2.product_id
    WHERE o2.user_id = o.user_id
    GROUP BY o2.order_id
    ORDER BY COUNT(p2.product_id) DESC
    LIMIT 1
)
GROUP BY o.user_id, u.user_name, o.order_id




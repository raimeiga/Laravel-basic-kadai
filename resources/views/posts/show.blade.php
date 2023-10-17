<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
 </head>
 
 <body>
 <table>
         <tr>
             <th>ID</th>
             <td>{{ $posts->id }}</td>
         </tr>
         <tr>
             <th>商品名</th>
             <td>{{ $posts->title }}</td>
         </tr>
         <tr>
             <th>価格</th>
             <td>{{ $posts->content }}</td>
         </tr>    
         <tr>
             <th>作成日時</th>
             <td>{{ $posts->created_at }}</td>            
         </tr>
         <tr>
             <th>更新日時</th>
             <td>{{ $posts->updated_at }}</td>
         </tr>      
     </table>
 </body>
 
 </html>
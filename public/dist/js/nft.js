

export const createSale = async (url, formInputPrice, isReselling, id) => {
    document.querySelector("#formInputPrice");
    document.querySelector("#nftImage").src;
    console.log(document.querySelector("#nftImage").src,document.querySelector("#formInputPrice"))
    // try {
    //     console.log(url, formInputPrice, isReselling, id);
    //     const price = ethers.utils.parseUnits(formInputPrice, "ether");
    //
    //     const contract = await connectingWithSmartContract();
    //     console.log(contract)
    //
    //     const listingPrice = await contract.getListingPrice();
    //     console.log(listingPrice)
    //
    //     const transaction = !isReselling
    //         ? await contract.createToken(NULL, price, {
    //             value: listingPrice.toString(),
    //         })
    //         : await contract.resellToken(id, price, {
    //             value: listingPrice.toString(),
    //         });
    //
    //     await transaction.wait();
    //     console.log(transaction);
    // } catch (error) {
    //     setError("error while creating sale");
    //     setOpenError(true);
    //     console.log(error);
    // }
};





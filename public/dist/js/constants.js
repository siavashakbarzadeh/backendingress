///0x5FbDB2315678afecb367f032d93F642f64180aa3
//0x5FbDB2315678afecb367f032d93F642f64180aa3

import nftMarketplace from "./NFTMarketplace.json" assert {"type":"json"};
import transferFunds from "./TransferFunds.json" assert {"type":"json"};

export const apiEndpoint="http://localhost:8000/api/";
//NFT MARKETPLACE
export const NFTMarketplaceAddress =
    "0x5276309453644295FceEea93dd0C5Fa29889784b";
export const NFTMarketplaceABI = nftMarketplace.abi;

//TRANSFER FUNDS
export const transferFundsAddress =
    "0xe7f1725E7734CE288F8367e1Bb143E90bb3F0512";
export const transferFundsABI = transferFunds.abi;
